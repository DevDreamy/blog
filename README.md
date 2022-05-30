# Blog MVP

This project is an MVP (Minimum Viable Product) of a blog, where it is possible to create authors and categories, and with this information, create posts for the blog.

The principal idea is that there will be two platforms accessing the API, one Dashboard where it’s going to be possible to register and log in as an author and one website where users are going to read the posts. Users would have limited access to the blog posts and a subscription would be needed for full access to them.

# Dependencies

This application uses the following framework and plugin:

-   CakePHP - a framework used to build the API;
-   Migrations - to help make changes to the database schema using PHP files.

# Usage

Make sure you have the following requirements to run this application:

-   HTTP Server. For example: Apache. Having mod_rewrite is preferred, but by no means required. You can also use nginx, or Microsoft IIS if you prefer;
-   Minimum PHP 5.6 (7.4 supported);
-   mbstring PHP extension;
-   intl PHP extension;
-   simplexml PHP extension;
-   PDO PHP extension;
-   MySQL (5.5.3 or greater);
-   Composer.

Assuming you are using Wampserver, clone this repository in the wamp64/www folder.

On a terminal, use the command below:

```
composer install
```

After every package has been completely installed,
rename the app_local.example.php to app_local.php, open this file and look for the Datasources section and change the username, password and database values according to your own configurations.
If you are not using the default port, make sure to uncomment the line above username to define your custom port.

After making these configurations, open your browser and access http://localhost/blog/posts to start using the API.

# Endpoints

This section has useful and relevant information on how to consume the API.

## Posts Authors

### Show all authors:

```
PATH:     /post-authors
METHOD:   GET
```

### Show one author:

```
PATH:     /post-authors/view/{id}
METHOD:   GET
```

### Create an author:

```
PATH:     /post-authors/add
METHOD:   POST
BODY:     {name: string, email: string, password: string, avatar: string, description: string }
```


## Posts Categories

### Show all categories:

```
PATH:     /post-categories
METHOD:   GET
```


### Show one category:

```
PATH:     /post-categories/view/{id}
METHOD:   GET
```


### Create a category:

```
PATH:     /post-categories/add
METHOD:   POST
BODY:     {name: string}
```

## Posts

### Show all posts:

```
PATH:     /posts
METHOD:   GET
```


### Show one post:

```
PATH:     /posts/view/{id}
METHOD:   GET
```


### Create a post:

```
PATH:     /posts/add
METHOD:   POST
BODY:     {title: string, body: string, post_category_id: int, post_author_id: int}
```
