# 💻 Bolt Browsercheck Extension

Author: Ivo Valchev

This Bolt extension works with the User-Agent to detect devices (desktop, tablet, mobile, etc.), 
clients, operating systems, brands and models.

## How to install

```bash
composer require bolt/browsercheck
```

## How to use

The extension defined a global Twig variable called `browsercheck`,
which gives you access to a lot of properties based on the `User-Agent`.

### Get browser name

```twig
{{ browsercheck.client.name }}
```

### Get browser version

```twig
{{ browsercheck.client.version }}
```

### Get the operating system name

```twig
{{ browsercheck.os.name }}
```

### Get the operating system version 

```twig
{{ browsercheck.os.version }}
```

### How to view all possible properties

There are many more properties available. To print them all,
use:

```twig
{{ dump(browsercheck) }}
```

Behind the scenes, the `browsercheck` Twig global variable is an instance
of [Matomo's Device Detection Library](https://github.com/matomo-org/device-detector).

Any method that is available to the `DeviceDetector` class is accessible through
the `browsercheck` variable defined by this extension.

## Running PHPStan and Easy Codings Standard

First, make sure dependencies are installed:

```
COMPOSER_MEMORY_LIMIT=-1 composer update
```

And then run ECS:

```
vendor/bin/ecs check src
```
