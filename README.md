# Sage-9-timber

Sage-9-timber is [Sage theme](https://github.com/roots/sage) version 9 made to work with [Timber](https://www.upstatement.com/timber/).

For easy integrations and later compatibility, this repository aimed at making the minimum of changes possible to the original Sage 9 beta 4 in order to make Timber work. This theme has still blade template language support.

**Sage 9 is in active development and is currently in beta. This initial fork used version Sage 9 beta 4. If you want a stable version of Sage ported to Timber, have a look at the [sage-timber](https://github.com/artifex404/sage-timber) project.**

## Features

* Sass for stylesheets
* ES6 for JavaScript
* [Webpack](https://webpack.github.io/) for compiling assets, optimizing images, and concatenating and minifying files
* [Browsersync](http://www.browsersync.io/) for synchronized browser testing
* Font Awesome (optional)

See a working example at [roots-example-project.com](https://roots-example-project.com/).

## Requirements

Make sure all dependencies have been installed before moving on:

* [Timber](https://www.upstatement.com/timber/) as a composer package
* [WordPress](https://wordpress.org/) >= 5.8
* [PHP](http://php.net/manual/en/install.php) >= 7.4
* [Composer](https://getcomposer.org/download/)
* [Node.js](http://nodejs.org/) >= 10.12.x
* [Yarn](https://yarnpkg.com/en/docs/install)

## Theme installation

Install Sage-9-timber by copying the project into a new folder within your WordPress themes directory.

## Theme structure

```shell
themes/your-theme-name/            # → Root of your Sage based theme
├── app/                           # → Theme PHP
│   ├── admin.php                  # → Theme customizer setup
│   ├── custom-blocks.php          # → Custom ACF block registration
│   ├── custom-content-types.php   # → Custom content type registration
│   ├── custom-theme-functions.php # → Custom functions specific to this theme
│   ├── filters.php                # → Theme filters
│   ├── helpers.php                # → Helper functions
│   └── setup.php                  # → Theme setup
├── composer.json                  # → Autoloading for `app/` files
├── composer.lock                  # → Composer lock file (never edit)
├── dist/                          # → Built theme assets (never edit)
├── node_modules/                  # → Node.js packages (never edit)
├── package.json                   # → Node.js dependencies and scripts
├── resources/                     # → Theme assets and templates
│   ├── acf-json                   # → ACF Json files
│   ├── assets/                    # → Front-end assets
│   │   ├── config.json            # → Settings for compiled assets
│   │   ├── build/                 # → Webpack and ESLint config
│   │   ├── fonts/                 # → Theme fonts
│   │   ├── images/                # → Theme images
│   │   ├── scripts/               # → Theme JS
│   │   └── styles/                # → Theme stylesheets
│   ├── functions.php              # → Composer autoloader, theme includes
│   ├── index.php                  # → Never manually edit
│   ├── screenshot.png             # → Theme screenshot for WP admin
│   ├── style.css                  # → Theme meta information
│   └── views/                     # → Theme Timber templates
│       └── _blocks/               # → Custom ACF Gutenberg blocks
│       └── _patterns/             # → Timber twig templates
│       │   ├── 00-base            # → General theme variables and main structure
│       │   ├── 01-atoms           # → The basic building blocks for all components
│       │   ├── 02-molecules       # → Components made up of multiple atoms
│       │   ├── 03-organisms       # → Components made of of multiple molecules
│       │   ├── 04-templates       # → The main skeleton  for pages
│       │   └── 05-pages           # → The main pages of the site
└── vendor/                        # → Composer packages (never edit)
```

## Theme setup

Edit `app/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and sidebars.

## Theme development

* Update `resources/assets/config.json` settings:
  * `devUrl` should reflect your local development hostname
  * `publicPath` should reflect your WordPress folder structure (`/wp-content/themes/sage-timber`)
* Run `yarn dev` from the theme directory to install development dependencies

### Build commands

* `yarn start` — Compile assets when file changes are made, start Browsersync session
* `yarn build` — Compile and optimize the files in your assets directory
* `yarn build:production` — Compile assets for production

## SCSS structure
A `bem_classes()` function to makes sure the SCSS is properly written with the BEM methodology along with prefixing all the class names with one of the following namespaces:
* `.l-` — Layouts
* `.o-` — Objects
* `.c-` — Components
* `.js` — JavaScript hooks
* `.is-`|`.has-` — State Classes
* `.u-` — Utility Classes

## Documentation

Timber documentation is available at [https://timber.github.io/docs/](https://timber.github.io/docs/).

Twig documentation is available at [http://twig.sensiolabs.org/](http://twig.sensiolabs.org/).

Sage 9 documentation is currently in progress and can be viewed at [https://github.com/roots/docs/tree/sage-9/sage](https://github.com/roots/docs/tree/sage-9/sage).

Controller documentation is available at [https://github.com/soberwp/controller#usage](https://github.com/soberwp/controller#usage).

ACF with Twig documentation is available at [https://github.com/timber/timber/blob/master/docs/guides/acf-cookbook.md](https://github.com/timber/timber/blob/master/docs/guides/acf-cookbook.md).

Twig/Timber Cheatsheet is available at [https://notlaura.com/the-twig-for-timber-cheatsheet/](https://notlaura.com/the-twig-for-timber-cheatsheet/)

BEM Methodology [https://www.smashingmagazine.com/2018/06/bem-for-beginners/](https://www.smashingmagazine.com/2018/06/bem-for-beginners/)
