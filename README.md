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
