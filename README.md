# Ubiweb Domain

This is a bare bones ubiweb site. It requires [ubiweb-core](https://github.com/ubiweb-media/ubiweb-core) to function. Use this to set up a new Ubiweb domain.

## Dev Setup
- Make a directory structure such as:

```
.
+ ubiweb
+-- ubiweb-core
+-- domains
|	+-- domain.com
```
- [Install ubiweb-core](https://github.com/ubiweb-media/ubiweb-core).
- Clone domain framework: `git clone https://github.com/ubiweb-media/ubiweb-domain.git domain.com`
- Adjust path in `domain.com/index.php` to the location of `ubiweb-core/bootstrap.php`

That's it! Of course, you're going to want to configure this more to have a presentable website.

## Setup

- First [choose a base template](https://github.com/ubiweb-media/template-starter).
- Require it in your project with `composer require ubiweb/{templateName}`
- Update your `config.yml` to specific the `Template`
- Create your stylesheet:

### Styles
- By default, the main stylesheet will point to `domain.com/assets/main.css`, so your styles must be compiled here. Edit your stylesheet under `content/styles/main.scss` to import your template, like so:
``` scss
@import "_variables.scss"; // optional customization
@import "../../vendor/templateName/styles/main.scss";

// Your custom styles.
```
- Run `sass content/styles/main.scss:assets/main.css` or `sass watch content/styles/main.scss:assets/main.css` to watch for changes. 

## Content
All of the site's content and configuration resides in `./content`. 
- `config.yml` contains the installation configuration. There are some special names for things like the template, otherwise you can define your own arbitrary global variables here.
- `pages.yml` contains the site's pages and is where you define the route URIs. If it doesn't exist here, the request will throw a 404. You can define more complicated POST, or DELETE routes by including an `./app/routes.php`.
- `translations.yml` is where you can supply translations for things like routes and overriding template variables. The main content is simply translated via its content directory `eg) ./content/fr/about.html`.
- `en/*` page content must always reside in its language folder. Specifying the default language in the config will remove the language from the URI. These pages are blade templates and can execute PHP.

## Pages
Pages use the [blade template](https://laravel.com/docs/5.4/blade) language. This is useful because it gives us a lot of convenience, but can also execute plain PHP.

Every page should contain at a bare minimum a declared layout, and some main content:
``` blade
@extends "layout/main"

@section('content')
<p>Hello World</p>
@endsection
```

You can extend some parts of the layout easily by providing some special sections:
```
@extends "layout/main"

@section('title', 'Page Title')

@section('head')
<!-- Maybe some SEO tags -->
<meta property=”og:type” content=”website” />
@endsection

@section('styles')
<!-- and some extra styles  -->
<link rel="stylesheet" href="/assets/styles/custom.css" />
@endsection

@section('scripts')
<!-- and some extra scripts  -->
<script>
alert("Holy cow, it works!")
</script>
@endsection

@section('content')
<p>Hello World</p>
@endsection
```

