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

    $html = <<<HTML
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TipNow — Resultado da conta</title>

        <style>
            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                min-height: 100vh;
                display: grid;
                place-items: center;
                padding: 24px;
                font-family: Arial, Helvetica, sans-serif;
                color: #172a23;
                background: linear-gradient(145deg, #e3f5eb, #f8faf8 65%);
            }

            main {
                width: min(100%, 480px);
                padding: clamp(24px, 6vw, 40px);
                background: #fff;
                border: 1px solid #dce8e1;
                border-radius: 24px;
                box-shadow: 0 16px 48px #18392b14;
            }

            .marca {
                display: inline-block;
                padding: 7px 12px;
                border-radius: 999px;
                background: #def4e8;
                color: #135c3d;
                font-size: 14px;
                font-weight: bold;
            }

            h1 {
                margin: 16px 0 8px;
                font-size: clamp(28px, 6vw, 36px);
                letter-spacing: -0.03em;
            }

            .descricao {
                margin: 0 0 24px;
                color: #4c6056;
                line-height: 1.5;
            }

            dl {
                margin: 0 0 24px;
            }

            dd {
                margin: 0;
                font-variant-numeric: tabular-nums;
            }

            .destaque {
                margin-bottom: 12px;
                padding: 18px;
                border-radius: 12px;
                background: #def4e8;
                color: #135c3d;
            }

            .destaque dd {
                margin-top: 6px;
                font-size: clamp(26px, 7vw, 40px);
                font-weight: bold;
                overflow-wrap: anywhere;
            }

            .detalhe {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 6px 12px;
                padding: 12px 0;
                border-bottom: 1px solid #dce8e1;
            }

            .detalhe dd {
                font-weight: bold;
            }

            .botao {
                display: block;
                padding: 14px;
                border-radius: 10px;
                background: #176143;
                color: #fff;
                text-align: center;
                text-decoration: none;
                font-weight: bold;
            }

            .botao:hover {
                background: #104a33;
            }

            .botao:focus-visible {
                outline: 2px solid #247d56;
                outline-offset: 3px;
            }
        </style>
    </head>
    <body>
        <main>
            <span class="marca">TipNow</span>
            <h1>Resultado da conta</h1>
            <p class="descricao">Veja quanto fica para cada pessoa, já com a gorjeta.</p>

            <dl>
                <div class="destaque">
                    <dt>Valor por pessoa</dt>
                    <dd>R$&nbsp;{$dividoPessoas}</dd>
                </div>

                <div class="detalhe">
                    <dt>Gorjeta</dt>
                    <dd>R$&nbsp;{$gorjeta}</dd>
                </div>

                <div class="detalhe">
                    <dt>Total com gorjeta</dt>
                    <dd>R$&nbsp;{$valorTotal}</dd>
                </div>
            </dl>

            <a href="/index.html" class="botao">Calcular outra conta</a>
        </main>
    </body>
    </html>
    HTML;
   
    $response->getBody()->write($html);
    return $response;

    
});;

$app->run();