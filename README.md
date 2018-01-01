# artisan-standalone

Allows you to use Artisan outside of a Laravel install.

Why do I want this?
-------------------

It's intended so that when you're building a standalone Laravel package, you still have access to the Artisan commands for generating boilerplate and don't have to generate them in your application, then copy them elsewhere.

How do I use it?
----------------

You will normally want to install this as a dev dependency in your package:

```bash
composer require --dev matthewbdaly/artisan-standalone
```

Then you can access the Artisan console in your package as follows:

```bash
vendor/bin/artisan
```
