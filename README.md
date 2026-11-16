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

## Imagens
<img width="1919" height="1030" alt="image" src="https://github.com/user-attachments/assets/e7d4f84b-411a-4181-9b6a-a8110a915dfc" />
<img width="1919" height="1033" alt="image" src="https://github.com/user-attachments/assets/b5727786-9f07-4b8a-b554-4022630aa497" />


## Autor e licença

[Hanyere Carvalho](https://github.com/hanyerecarvalho) · [Licença MIT](LICENSE)
