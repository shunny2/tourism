<p align="center">
<a href="#about-application">About Application</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#technologies">Technologies</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#how-to-run">How to run</a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<a href="#project-status">Project Status</a>
</p>

</br>

![tourist-spots](https://user-images.githubusercontent.com/72872854/191530497-8d54969e-8571-4225-99eb-182a31207585.png)

## About Application

Web application developed during the internship. The focus of the application is the registration and management of tourist spots.

## Technologies

- [PHP](https://www.php.net/)
- [phpMyAdmin](https://www.phpmyadmin.net/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)
- [Docker](https://www.docker.com/)

## How to Run

First, start by cloning the repository:
```shell
git clone https://github.com/shunny2/turismo
```
Now copy the .env.example file, create a new .env file and place the copied file in it. 

Run the command to create the image and get the container running:
```bash
docker-compose up -d --build
```

Run container interaction mode:
```bash
docker exec -it app-turismo bash
```

Install project dependencies with:
```bash
composer install
```

Still inside the container, run the migrations and seeders with the commands:
```bash
php artisan migrate
```
```bash
php artisan db:seed
```

Finally, it is necessary to give the users permission and link to the storage where the saved images will be stored. To do this, run the commands:
```bash
php artisan create:permissions
```
```bash
php artisan run:configs
```

## Project Status

> Status: Not finished.

<hr></hr>

<p align="center">Created by <a href="https://github.com/shunny2"><b>Alexander Davis</b></a>.</p>
