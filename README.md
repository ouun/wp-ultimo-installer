# WP-ULTIMO Installer

A composer plugin based on PhilippBaschke/acf-pro-installer that makes installing WP-ULTIMO with [composer] easier. 

It reads your :key: WP-ULTIMO key from the **environment** or a **.env file**.

[WP-ULTIMO]: https://www.wpultimo.com/
[composer]: https://github.com/composer/composer

## Usage

**1. Add the package repository to the [`repositories`][composer-repositories] field in `composer.json`:**

```json
{
  "type": "package",
  "package": {
    "name": "wp-ultimo/wp-ultimo",
    "version": "*.*.*(.*)",
    "type": "wordpress-plugin",
    "dist": {
      "type": "zip",
      "url": "https://versions.nextpress.co/updates?action=download&slug=wp-ultimo"
    },
    "require": {
      "ouun/wp-ultimo-installer": "^1.0",
      "composer/installers": "^1.0"
    }
  }
}
```
Replace `"version": "*.*.*(.*)"` with your desired version.

**2. Make your WP-ULTIMO key available**

Set the environment variable **`WP_ULTIMO_KEY`**.

Alternatively you can add an entry to your **`.env`** file:

```ini
# .env (same directory as composer.json)
WP_ULTIMO_KEY=Your-Key-Here
```

**3. Require WP-ULTIMO**

```sh
composer require wp-ultimo/wp-ultimo:*
```
You can specify an [exact version][composer-versions] (that matches your desired version).

If you use **`*`**, composer will install the version from the package repository (see 1). This has the benefit that you only need to change the version in the package repository when you want to update.

*Be aware that `composer update` will only work if you change the `version` in the package repository. Decreasing the version only works if you require an [exact version][composer-versions].*

[composer-repositories]: https://getcomposer.org/doc/04-schema.md#repositories
[composer-versions]: https://getcomposer.org/doc/articles/versions.md
[package-gist]: https://gist.github.com/fThues/705da4c6574a4441b488
[acf-account]: https://www.advancedcustomfields.com/my-account/
