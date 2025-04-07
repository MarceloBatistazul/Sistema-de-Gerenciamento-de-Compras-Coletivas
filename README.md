# 🛒 Sistema de Gerenciamento de Compras Coletivas

## 📌 Descrição

Este projeto é um sistema desenvolvido em Laravel para gerenciar compras coletivas feitas por um grupo de moradores. Ele permite a organização de produtos, pedidos e pagamentos, facilitando a administração das compras realizadas em atacado.

## 🚀 Funcionalidades

- 👥 Cadastro de moradores
- 📦 Cadastro de produtos disponíveis
- 🛍️ Registro de compras coletivas
- 📝 Gerenciamento de pedidos de moradores
- 💰 Controle de status de pagamento dos pedidos

## 🛠️ Requisitos

Antes de iniciar a execução do projeto, verifique se os seguintes requisitos estão instalados no seu ambiente:

- 🐘 PHP ≥ 8.0
- 🎼 Composer
- 🌐 Laravel ≥ 10
- 🗄️ MySQL
- 🟢 Node.js (para o Vite, se aplicável)

## 🔧 Instalação e Configuração

1. 📥 Clone o repositório:
   ```sh
   https://github.com/MarceloBatistazul/Sistema-de-Gerenciamento-de-Compras-Coletivas
   ```
2. 📂 Acesse a pasta do projeto:
   ```sh
   cd Sistema-de-Gerenciamento-de-Compras-Coletivas
   ```
3. 📦 Instale as dependências do Laravel:
   ```sh
   composer install
   ```
4. ⚙️ Copie o arquivo de configuração:
   ```sh
   cp .env.example .env
   ```
5. 🔑 Configure o arquivo `.env` com as credenciais do banco de dados.
6. 🔑 Gere a chave da aplicação:
   ```sh
   php artisan key:generate
   ```
7. 🏗️ Execute as migrations para criar as tabelas no banco de dados:
   ```sh
   php artisan migrate
   ```
8. (Opcional) 📊 Popule o banco de dados com dados fictícios:
   ```sh
   php artisan db:seed
   ```
9. ▶️ Inicie o servidor local:
   ```sh
   php artisan serve
   ```


## 🏛️ Estrutura do Banco de Dados

O sistema conta com as seguintes tabelas e seus respectivos relacionamentos:

- **👥 residents**: armazena os moradores participantes.
- **📦 products**: armazena os produtos disponíveis para compra.
- **🛍️ collective\_purchases**: registra compras coletivas realizadas.
- **📝 orders**: armazena os pedidos dos moradores.
- **💰 payments**: controla o status de pagamento de cada pedido.

## 💻 Tecnologias Utilizadas

- 🖥️ Laravel 10
- 🗄️ MySQL
- 🎨 Blade Templates
- 🎨 Bootstrap
- 🐳 Docker

## ✍️ Autores

Projeto desenvolvido por **Marcelo Batista, Henrique Negri e Ingrid Miranda**.

## 📜 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

