
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
- 🟢 Node.js 

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

=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> d6970ff (Primeiro commit do projeto)
