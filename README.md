# wp-classic-theme-starter
A WordPress classic starter theme, inspired by [_s/underscores](https://underscores.me).

**Warning:** This starter theme is still under initial development and still not recommended to use in real projects.

# Usage

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace **(case-sensitive)** on the name in all the templates.

1. Search for `'wp-classic-theme-starter'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `wp_classic_theme_starter_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: wp-classic-theme-starter` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for `WP_Classic_Theme_Starter` to capture DocBlocks and replace with: `Megatherium_is_Awesome`.
5. Search for `wp-classic-theme-starter-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `WP_CLASSIC_THEME_STARTER_` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `wp-classic-theme-starter.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.