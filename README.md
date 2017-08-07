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



