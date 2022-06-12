<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/edineivaldameri/livros/master/public/img/logo.png" width="400">
    </a>
</p>

## Livraria Cultural

Este projeto será construído e atualizado para atender os requisitos de um desafio de softare.
Por consequências foram cumpridos alguns requisitos como: 

- [Utilização de Repository e Services através do pacote l5-repositor](https://github.com/andersao/l5-repository).
- [Integração com API externa para exibir o clima](https://hgbrasil.com/status/weather).
- Utilizado PHP 8, Laravel, Sistema de Autenticação e Migrations para criação das tabelas do banco.

## Instalação

1) Para iniciar o processo clone o [repositório](https://github.com/edineivaldameri/livros.git) para seu ambiente local.
2) Navege até o repositório criado.

-- Partindo do presuposto que você já tenha o composer instalando, execute o comando:

``` bash
composer install
```

## Configuração

Geralmente durante a instalação o próprio `composer` criará no diretório raiz da sua aplicação um arquivo `.env`.
Se isso não ocorrer você poderá renomear o arquivo `env.example` para `.env` manualmente.

Com seu arquivo `.env` devidamente criado, siga as intruções abaixo:

1) Crie sua bade de dados (MySql) e configure no arquivo `.env`
2) Após configurado o arquivo `.env` com seu dados de acesso ao banco de dados, execute os seguintes comandos: 

``` bash
php artisan config:cache
```

3) Realize a criação do seu mando de dados executando o comando:
``` bash
php artisan migrate
```
Neste momento as tabelas do banco de dados foram criadas e já estaram disponíveis para utilização:

4) Você pode popular o banco de dados executando o comando:
``` bash
php artisan db:seed
```
Este comando criará automaticamente um usuário: `test@example.com` com a senha: `123456`;

Após a criação do usuário será executado uma Factory para popular a tabela de livros com 50 registros iniciais;

Se você não desejar criar esses registros, navegue ate o arquivo `database/seeders/DatabaseSeeder.php` e comente as linhas como mostrado a seguir:

```php
/**
    $this->call([
        BookSeeder::class,
    ]);
*/
```

5) Para finalizar execute o comando:
``` bash
php artisan optimize:clear
```

## Executando o Projeto

1) Se você seguiu todos os passos acima, deve ser capaz de executar o seu projeto sem problemas. Para isso execute o comando:
``` bash
php artisan serve
```

2) Inicie o seu nagegador, [CLICANDO AQUI](http://localhost:8000/)

Pronto, se tudo estiver correto você será direcionado para a Tela de Login e já pode iniciar a navegação pela aplicação;
Como informado acima, para realizar o login basta informar o e-mail `test@example.com` e a senha `123456`.



## Explicando o Projeto

1) No canto superior esquerdo a um botão `SOL` ou `LUA` (depende do horário de acesso ao sistema). Nesse área será mostrado um widget com a previsão tempo que é busca na [API](https://hgbrasil.com/status/weather) informada.

Foi optado pela captação do IP do cliente como forma de filtro da localização, conforme pode ser visto no Provider `app/Providers/ApiWeatherProvider.php` e segue exemplificado abaixo:

```php
 // ....
    return Http::withOptions([
        'verify' => false,
        'base_uri' => 'https://api.hgbrasil.com',
    ])->get('/weather', [
        'key' => 'API_KEY',
        'fields' => 'only_results',
        'user_ip' => $app->request->ip(),
    ]);
 // ....
```
