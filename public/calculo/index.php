<?php
require __DIR__ . '/../../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use src\calculo\Calculo;

$app = AppFactory::create();

$app->post('/calculo', function (Request $request, Response $response) {
    
    $dados = $request->getParsedBody();

    $calculo = new Calculo();
    $calculo->setGorjeta($dados['gorjeta'] ?? 0);
    $calculo->setValor($dados['valor'] ?? 0);
    $calculo->setQtdPessoas($dados['qtdPessoas'] ?? 0);

    $gorjeta = $calculo->gorjeta();
    $dividoPessoas = $calculo->divisPessoas();
    $valorTotal = $calculo->valorTotal();

    $html = '
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Resultado da Conta</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            h1 {
                text-align: center;
                margin-top: 20px;
            }
            #buttonTelaInicial {
                align-items: center;
            }
        </style>
    </head>

    <body class="bg-light">

        <h1 class="text-success">TipNow</h1>

        <div class="container mt-5">
            <div class="card p-4">

                <h3 class="mb-3">Resultado da Conta</h3>

                <p><strong>Gorjeta:</strong> R$ ' . number_format($gorjeta, 2, ',', '.') . '</p>
                <p><strong>Total:</strong> R$ ' . number_format($valorTotal, 2, ',', '.') . '</p>
                <p><strong>Por pessoa:</strong> R$ ' . number_format($dividoPessoas, 2, ',', '.') . '</p>           

            </div>
        </div>

        <div class="text-end mt-3">
            <a href="/../index.html" class="btn btn-danger" id="buttonTelaInicial">
                Voltar
            </a>
        </div>
    </body>
    </html>

    ';
   
    $response->getBody()->write($html);
    return $response;

    
});;

$app->run();