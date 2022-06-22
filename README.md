## Sobre a Aplicação

    Aplicação para o cadastro e gerencimento de pontos turísticos.

## Execução

<ol>
    <li>Copie o arquivo .env.example, crie um novo arquivo .env e coloque o arquivo copiado nele.</li>
    <li>Construa o projeto e coloque os containers em execução com docker-compose up -d --build.</li>
    <li>Entre dentro do container, e execute o comando 'composer install' para instalar todas as depêndencias do projeto.</li>
    <li>Ainda dentro do container, execute as migrations e os seeders com os comandos 'php artisan migrate' e 'php artisan db:seed'.</li>
    <li>Além disso, é necessário dar as permissões dos usuários e fazer o link para o storage onde será armazenado as images salvas. Para fazer isto, execute os comando 'php artisan create:permissions' e 'php artisan run:configs'.</li>
</ol>
