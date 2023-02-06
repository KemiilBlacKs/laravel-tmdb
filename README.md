# laravel-tmdb

Laravel Tmdb is a Laravel 9 app for the [TMDb API](https://developers.themoviedb.org/3/).

It works with Laravel 9, MySQL 8.0 and Docker.

## Source

To make the front, I was inspired by the tutorial of :

-   [LaravelTuts](https://laraveltuts.com/working-with-tmdb-api-in-laravel-9/)

### Prerequisites

-   [Composer](https://getcomposer.org/download/)
-   [Docker](https://docs.docker.com/get-docker/)

## Installation

The [documentation of laravel](https://laravel.com/docs/9.x/installation#getting-started-on-windows) being well
provided, I used it for the initialization of the project.

I used [TailwindCSS](https://tailwindcss.com/docs/guides/laravel) to style my view, I am much more comfortable with.

### Docker

Use the [sail command](https://laravel.com/docs/9.x/sail#using-devcontainers) to install the devcontainer with mysql (or
the database of your choice). Here my sail up command posed me some problems, so I had to use the Docker CLI commands
directly to launch my container.

## Launch

To launch the project, go to the root of your project and mount your container with the command (You can use the `-d` option at the end to make it run in the background):

```shell
docker-compose up
```

Started the npm server to compile the correct CSS on the view:

```shell
npm run dev
```

You can now access the project at the address [http://localhost:80](http://localhost:80)

## How I did it

I used the artisan command to create my 'MoviesController'.

```shell
php artisan make:controller MoviesController
```

And to create my card component for movies

```shell
php artisan make:component MovieCard
```

I used the [TMDb API](https://developers.themoviedb.org/3/) to get the data of the movies.

I had some problems with the movie listings, some fields like 'title' are replaced by 'name' and 'release_date' by
'first_air_date'. I put a condition on the view to fix this.
