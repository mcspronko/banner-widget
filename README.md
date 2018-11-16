# Pronko Banner Widget

The Banner Widget is a Magento 2 extension which allows to create a CMS Widget for the showcase purposes.
It provides a separate widget called "Pronko Widget", where admin can specify the title and subtitle of the banner and insert it into a page.

# Installation

Add the repository location to your composer.json file:
```bash
$ composer config repositories.pronko git https://github.com/mcspronko/banner-widget
```

Execute the composer require command: 
```bash
$ composer require pronko/banner-widget:dev-master
```

# Style the Banner Widget

The banner widget comes with the default template and CSS classes.

The parent container of the `showcase.phtml` template contains two css classes `.widget` and `.block-pronko-banner`.

The `.services-page-header` class is a banner main container.

The `.title` class holds the title of a banner widget.

The `.subtitle` class holds the subtitle of a banner widget 

The banner widget can be added and styled according to your website design. Simply create in your custom theme an `_extend.less` file.
The file location should be in the `app/design/frontend/<Theme_Vendor>/<Theme_Name>/Pronko_BannerWidget/web/css/source` directory.

The following is an example of the Pronko Banner Widget styled according to the Pronko Consulting theme.
![Pronko Banner Widget Example](https://github.com/mcspronko/banner-widget/raw/master/docs/images/banner-widget.png "Pronko Banner Widget Example Layout")
