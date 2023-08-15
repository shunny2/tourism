<p align="center">
    <a href="#about-application">About Application</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#technologies">Technologies</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#how-to-run">How to run</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#project-status">Project Status</a>
    &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#license">License</a>
</p>

</br>

![tourist-spots](https://user-images.githubusercontent.com/72872854/191530497-8d54969e-8571-4225-99eb-182a31207585.png)

<p align="center">
  <a href="https://img.shields.io/github/stars/shunny2/tourism?style=social"><img src="https://img.shields.io/github/stars/shunny2/tourism?style=social" alt="Repo Stars" /></a>
  <a href="https://img.shields.io/github/forks/shunny2/tourism?style=social"><img src="https://img.shields.io/github/forks/shunny2/tourism?style=social" alt="Forks" /></a>
  <a href="https://img.shields.io/github/license/shunny2/tourism?style=social"><img src="https://img.shields.io/github/license/shunny2/tourism?style=social" alt="License"/></a>
</p>

## About Application

<b>Tourism</b> is a Web application developed during the internship. The focus of the application is the registration and management of tourist spots.

## Technologies

<table>
  <thead>
  </thead>
  <tbody>
    <td>
      <a href="https://www.php.net/" title="PHP"><img width="128" height="128" src="https://www.php.net/images/logos/new-php-logo.svg" alt="PHP logo image." /></a>
    </td>
    <td>
      <a href="https://www.phpmyadmin.net/" title="phpMyAdmin"><img width="128" height="128" src="https://www.vectorlogo.zone/logos/phpmyadmin/phpmyadmin-ar21.svg" alt="phpMyAdmin logo image." /></a>
    </td>
    <td>
      <a href="https://laravel.com/" title="Laravel"><img width="128" height="128" src="https://cdn.worldvectorlogo.com/logos/laravel-2.svg" alt="Laravel logo image." /></a>
    </td>
    <td>
      <a href="https://www.mysql.com/" title="MySQL"><img width="128" height="128" src="https://www.vectorlogo.zone/logos/mysql/mysql-official.svg" alt="MySQL logo image." /></a>
    </td>
    <td>
      <a href="https://www.docker.com/" title="Docker"><img width="128" height="128" src="https://cdn.worldvectorlogo.com/logos/docker.svg" alt="Docker logo image." /></a>
    </td>
  </tbody>
</table>

## How to Run

First, start by cloning the repository:
```shell
git clone https://github.com/shunny2/tourism
```
Now copy the .env.example file, create a new .env file, and place the copied file in it. 

Run the command to create the image and get the container running:
```bash
docker-compose up -d --build
```

Run container interaction mode:
```bash
docker exec -it app-tourism bash
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

Finally, it is necessary to give the users permission and link to the storage where the saved images will be stored.\
To do this, run the commands:
```bash
php artisan create:permissions
```
```bash
php artisan run:configs
```

## Project Status

> Status: Stopped.

## License

This project is under an [MIT](https://opensource.org/licenses/MIT) license.

<hr></hr>

<p align="center">Created by <a href="https://github.com/shunny2"><b>Alexander Davis</b></a>.</p>
