# 🪙 TipNow - Calculadora de Gorjetas

O TipNow é uma aplicação web desenvolvida em PHP, HTML e CSS para facilitar o cálculo de gorjetas e a divisão de contas em restaurantes de forma rápida e prática.

O sistema permite que o usuário informe o valor da conta, escolha a porcentagem da gorjeta e defina a quantidade de pessoas para realizar a divisão. A aplicação calcula automaticamente o valor da gorjeta, o total da conta e o valor individual que cada pessoa deverá pagar, evitando erros manuais e tornando o processo mais eficiente.

## 🚀 Funcionalidades

- Cálculo de gorjeta com porcentagens de 5%, 10%, 15% e 20%;
- Divisão da conta entre várias pessoas;
- Cálculo automático do valor total com a gorjeta adicionada;
- Cálculo do valor individual por pessoa;
- Interface simples e intuitiva;
- Validação de valores para evitar entradas inválidas.

## 🛠️ Tecnologias Utilizadas

- PHP 8+
- HTML5
- CSS3
- Bootstrap
- Slim Framework
- Composer

## ▶️ Como Executar o Projeto

Clone o repositório:

git clone https://github.com/hanyerecarvalho/TipNow.git

Acesse a pasta do projeto:

```
cd TipNow
```

Instale as dependências:

```
composer install
```

Execute o servidor PHP:

```
php -S localhost:8000 -t public
```

Acesse no navegador:

http://localhost:8000

## 📊 Exemplo de Uso

Entrada:

Valor da conta: R$ 200,00  
Gorjeta: 10%  
Número de pessoas: 4  

Saída:

Gorjeta: R$ 20,00  
Valor total: R$ 220,00  
Valor por pessoa: R$ 55,00  

## 📁 Estrutura do Projeto

```
TipNow/
├── public/
│   └── index.php
├── src/
│   └── calculo/
│       └── Calculo.php
├── vendor/
├── composer.json
└── composer.lock
```

## 📌 Status do Projeto

Projeto funcional com as principais funcionalidades implementadas. Futuras melhorias incluem aprimoramento das validações dos dados recebidos, tratamento de campos vazios e melhorias na experiência do usuário.

## 👨‍💻 Autor

Desenvolvido por **Hanyere**
