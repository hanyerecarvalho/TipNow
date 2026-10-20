# TipNow 🪙

Calculadora de gorjetas e divisão de contas desenvolvida como projeto de estudo com **PHP, Slim Framework, HTML, CSS e Bootstrap**.

## O que faz

- Calcula gorjetas de 5%, 10%, 15% ou 20%.
- Soma a gorjeta ao valor original da conta.
- Divide o total pela quantidade de pessoas.
- Apresenta os resultados em reais.

## Exemplo

| Entrada | Valor |
| --- | --- |
| Conta | R$ 200,00 |
| Gorjeta | 10% |
| Pessoas | 4 |

**Resultado:** R$ 20,00 de gorjeta, R$ 220,00 no total e R$ 55,00 por pessoa.

## Executar localmente

Requisitos: PHP 8.0 ou superior e Composer. O Bootstrap é carregado por CDN e precisa de acesso à internet.

```bash
git clone https://github.com/hanyerecarvalho/TipNow.git
cd TipNow
composer install
php -S localhost:8000 -t public
```

Abra `http://localhost:8000/index.html`, preencha o formulário e envie os dados. A rota `POST /calculo` é tratada por `public/calculo/index.php`.

## Organização

```text
public/index.html          Formulário da calculadora
public/calculo/index.php   Rota POST /calculo e apresentação do resultado
src/calculo/calculo.php    Classe com as regras de cálculo
composer.json             Dependências e autoload
```

## Limitações atuais

A classe rejeita divisões com quantidade de pessoas menor ou igual a zero, mas o tratamento dos erros e a validação dos demais valores ainda podem ser aprimorados. O nome do arquivo `calculo.php` difere da capitalização da classe `Calculo`; isso pode afetar o autoload em ambientes sensíveis a maiúsculas e minúsculas.

## Autor e licença

[Hanyere Carvalho](https://github.com/hanyerecarvalho) · [Licença MIT](LICENSE)
