# WP Foundation

## Development from scratch

1. Run `composer create-project heyblackmagic/wp-foundation ./PATH` to create a WP instance with Composer.
2. In the directory where the project was installed, run `composer update` to install plugins and composer dependencies.
3. Then run `npm install && npm run build` to install node packages and generate the asset bundle.
4. With the terminal enter the `./public_html` directory and execute `valet link VHOST_NAME`, where `VHOST_NAME` is the name of the local domain. Example: "valet link foundation".

## Development continuation from git pull

1. Pull / Clone the project.
2. Go to project folder and run the command `composer update`, `npm install` and `npm run build`.
3. Rename `env.example` to `.env` and update the variables.
4. With the terminal enter the `./public_html` directory and execute `valet link VHOST_NAME`, where `VHOST_NAME` is the name of the local domain. Example: "valet link foundation".

## Directory

```zsh
.
├── LICENSE.md
├── README.md
├── composer.json
├── composer.lock
├── config
│   ├── application.php
│   └── environments
│       ├── development.php
│       └── staging.php
├── package-lock.json
├── package.json
├── phpcs.xml
├── postcss.config.js
├── public_html
│   ├── app
│   │   ├── mu-plugins
│   │   │   └── bedrock-autoloader.php
│   │   ├── plugins
│   │   ├── themes
│   │   │   └── foundation
│   │   │       ├── assets
│   │   │       │   └── img.jpg
│   │   │       ├── components
│   │   │       │   ├── component-footer.php
│   │   │       │   └── component-header.php
│   │   │       ├── footer.php
│   │   │       ├── front-page.php
│   │   │       ├── functions.php
│   │   │       ├── header.php
│   │   │       ├── home.php
│   │   │       ├── inc
│   │   │       │   ├── child-items.php
│   │   │       │   ├── helpers.php
│   │   │       │   ├── menu-items.php
│   │   │       │   ├── template-functions.php
│   │   │       │   ├── vite-constants.php
│   │   │       │   ├── vite-env.php
│   │   │       │   └── vite-scripts.php
│   │   │       ├── index.php
│   │   │       ├── meta
│   │   │       │   ├── favicon.php
│   │   │       │   └── fonts.php
│   │   │       ├── page.php
│   │   │       ├── snippets
│   │   │       └── style.css
│   │   └── uploads
│   ├── index.php
│   └── wp-config.php
├── src
│   ├── js
│   │   └── app.js
│   ├── public
│   └── scss
│       ├── abstracts
│       │   ├── _mixins.scss
│       │   ├── _variables.scss
│       │   └── index.scss
│       ├── app.scss
│       ├── base
│       │   ├── _buttons.scss
│       │   ├── _helpers.scss
│       │   ├── _images.scss
│       │   ├── _reset.scss
│       │   ├── _root.scss
│       │   ├── _typography.scss
│       │   └── index.scss
│       ├── components
│       │   └── index.scss
│       ├── snippets
│       │   └── index.scss
│       ├── templates
│       │   └── index.scss
│       └── vendor
│           └── index.scss
├── templates -> public_html/app/themes/foundation
├── vite.config.js
└── wp-cli.yml
```
