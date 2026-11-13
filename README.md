# 72HW Portfolio

A lightweight WordPress portfolio theme using native PHP templates, responsive CSS, and no page builder or third-party front-end dependencies.

## Requirements

- WordPress 6.4 or later
- PHP 7.4 or later

## Features

- Custom logo, primary menu, featured images, and HTML5 markup
- Responsive front page with a project-focused hero and work section
- Optional [72HW Showcase](https://github.com/72hourwebsites/72hw-showcase) grid, with a published-posts fallback
- Single, page, archive, search, 404, and comments templates
- Skip link, visible keyboard focus, screen-reader text, and reduced-motion support
- Translation-ready strings and GPLv2-or-later licensing

## Installation

Install the folder as `wp-content/themes/72hw-portfolio`, then activate **72HW Portfolio**. Set the site title, description, logo, and primary menu in WordPress. Add the companion plugin when you want dedicated Showcase Items.

## Development

All presentation is in `style.css`; setup is in `functions.php`; templates use the `hw72_portfolio_` prefix and the `72hw-portfolio` text domain.

Check every template with:

```sh
find . -name '*.php' -not -path './.git/*' -print0 | xargs -0 -n1 php -l
```

No build step or package installation is required.

## License

GPLv2 or later. See `LICENSE`.
