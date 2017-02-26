Silex Standard Edition
======================

This is set of gulp tasks and watchers for converting PSD to HTML using Twig template engine (based on Silex Framework).

Goal:
------------

The main goal of this build is creating the fastest HTML integration with Symfony. Decrease time for replacing and editing templates by means of using Symfony methodology, Twig template engine and gorgeous Gulp bundler.

Installation
------------

1) Creating a Silex Application

You can use `Composer` to ease the creation of a new project:

```shell
$ composer create-project glavweb/silex-standard path/to/install "~0.1"
```

Composer will create a new Silex project under the `path/to/install` directory.

2) Configure the project

You need create `parameter.php` file. For this you can clone `parameter.php.dist` file to `parameter.php` and change parameter `host_url` to your site host:   

```shell
$parameters['host_url'] = 'http://YOUR_SITE_HOST.com';
```

3) Install node modules:

```shell
npm install
```

4) Install bower

If bower not installed previously, run command:

```shell
npm install -g bower
```

Install dependent libraries:

```shell
bower install
```

5) Install Gulp

If Gulp not installed previously, run command:

```shell
npm install -g gulp
```

6) Run Gulp

run command:

```shell
gulp 
```

Project structure:
------------

There are three main directories: `web`, `app` and `src`. Description of each one is below

Web:
------------
Web folder contains all project static files and entrypoints for the project: 
- `web\app.php` - production entrypoint for the project;
- `web\app_dev.php` - developer entrypoint for the project;
- `web\components` - bower components;
- `web\css`  - css files;
- `web\js` - js files;
- `web\images|web\videos` - all video and images assets;
- `web\fonts` - all fonts;
- `web\plugins` - all custom vendors;
- `web\static\*.html` - html compiled files.

App:
----

Markup folder contains configuration and templates:
- `app\Application.php` - front controller for the project;
- `app\config\config.php` – main configuration for the project;
- `app\config\config_dev.php` – developer configuration for the project;
- `app\config\config_prod.php` – production configuration for the project;
- `app\config\parameter.php.dist` – dummy parameters (need only for copy);
- `app\config\parameter.php` – parameters for the project;
- `app\Resources\fixtures` – keeps fixture files;
- `app\Resources\less` - keeps less resources;
- `app\Resources\views` - keeps templates files;

Src:
----

The src folder contains scripts for extend logic the project. 

- `src\Controller` - keep controller files (configurations for views).
- `src\Twig` - keep the Twig Extension file for extend template`s logic.

Is uses popular programming pattern - [Model-View-Controller]. 

***

Fixtures - contains dummy for project's instances. 

For example: Menu instance looks like:

```shell
$fixture['menu'] = [
    'class' => [
        'fields' => [
            ['name' => 'name', 'type' => 'string'],
            ['name' => 'link', 'type' => 'string'],
        ]
    ],
    'instances' => [
        [
            'name' => 'Main',
            'link' =>  '#home'
        ],
        ...
    ]
];
``` 

***

Views - contains html templates.

Base of html templates is [Twig] template engine uses at Symfony by default. Full documentation is here [Twig/doc]

We create base template per each page where are header and footer as usual. We call it base.html.twig (.html postfix isn't necessary but it needs for projects, which will be integrated with Symfony). Base template is at root directory of each templates and is bone for following pages 

Per common blocks which are used on several pages we create at `app/Resources/views/common` folder. Inserting of such blocks by means of `include` tag. For example:

```shell
{% include 'common/navbar.html.twig' %}
``` 

Important: folders path is determined regarding root template folder `app/Resources/views`.  

```shell
{% include 'common/test.html.twig' %}
``` 

All external files includes by asset function, which generates right paths to resources

```shell
<link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
<script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
``` 

***

Controllers - contains configuration for templates.

For example Person action in Default controller:

```shell
/**
 * Person show page
 */
$controllers->get('/person', function (Application $app) {
    return $app['twig']->render('pages/person.html.twig', [
        'name' => 'John Doe',
        'phone' => '+7 123 123 1234'
    ]);
})->bind('person_show');
``` 

`'/person'` - define URL for page.
`'person_show'` - method "bind" allow get page url by action name. For example: 

```shell
<a href="{{ path('person_show') }}">Person show page</a>
```

`'pages/person.html.twig'` - here define path to twig template.

Also you can pass some variables for your twig template:
```shell
'name' => 'John Doe',
'phone' => '+7 123 123 1234'
```

Gulp:
------------

Gulp contains all bundlers tasks and watchers. All tasks are easy to understand:

- `css` - all task for compiling CSS;
- `html` - all task for compiling HTML templates;
- `generator` - all task for generating code;
- `images` - all task for compiling images;
- `js` - all task for compiling javascript ;
- `serve` - all task for compiling for developing mode.


[Model-View-Controller]: https://ru.wikipedia.org/wiki/Model-View-Controller
[Twig]: http://paularmstrong.github.io/swig/
[Twig/doc]: http://paularmstrong.github.io/swig/docs/