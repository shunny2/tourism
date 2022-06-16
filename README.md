## Sobre a Aplicação

    Aplicação para o cadastro e gerencimento de pontos turísticos.

## Execução

    Para a execução, copie o arquivo .env.example e crie um novo arquivo .env.
    Após isto, construa o projeto e coloque os containers em execução com docker-compose up -d --build.
    Dentro do container do execute o comando 'composer install' para instalar todas as depêndencias do projeto.
    Execute as migrations e os seeders com os comandos 'php artisan migrate' e 'php artisan db:seed'.
    Além disso, é necessário dar as permissões dos usuários e fazer o link para o storage onde será armazenado as images salvas. Para fazer isto, execute os comando 'php artisan create:permissions' e 'php artisan run:configs'.
