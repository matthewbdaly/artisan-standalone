# artisan-standalone

Allows you to use Artisan outside of a full Laravel or Lumen install.

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

Can I use it globally?
----------------------

In theory it might, but I haven't set it up to do so - it doesn't actually include Laravel as a dependency, so you'd need to install `laravel/framework` globally as well. My recommendation is to install it on a per-project basis. You might want to check out my [boilerplate package](https://github.com/matthewbdaly/laravel-package-boilerplate), which includes this one as a dependency, and is a good starting point for building a standalone Laravel package.
