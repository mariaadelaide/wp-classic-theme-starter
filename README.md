# wp-classic-theme-starter
A starter for WordPress classic themes, based on [_s/underscores](https://underscores.me).

# Usage

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace **(case-sensitive)** on the name in all the templates.

1. Search for `'wp-classic-theme-starter'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `wp_classic_theme_starter_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: wp-classic-theme-starter` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for `WP_Classic_Theme_Starter` to capture DocBlocks and replace with: `Megatherium_is_Awesome`.
5. Search for `wp-classic-theme-starter-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `WP_CLASSIC_THEME_STARTER_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `wp-classic-theme-starter.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

# Setup

To start using all the tools that come with `wp-classic-theme-starter`  you need to install the necessary Node.js and Composer dependencies :

```sh
$ composer install
$ npm install
```

# Available CLI commands

`wp-classic-theme-starter` comes packed with CLI commands tailored for WordPress theme development :

- `composer lint:wpcs` : checks all PHP files against [WordPress PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `npm run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.
- `npm run lint:scss` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint:js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/).
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

# Maintainers/Who to talk

For questions about about this project or issues, you can reach out to:

- Pedro Santa ([pedro@mariaadelaide.com](mailto:pedro@mariaadelaide.com))
