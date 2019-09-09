# Kirby Google analytics snippet

Plugin which adds the Google Analytics tracking snippet to your Kirby CMS website as snippet.

## Installation

Put the `kirby-google-analytics` folder in your `site/plugins` folder.

## Usage

Add the snippet as close to the `</body>` tag as possible:

```php
<?php snippet('google-analytics') ?>
```

💡 Don't forget to [set your property ID](#kirby-configurable-options).
If you don't set a property ID (or if it's empty), the snippet won't have any output.

## Kirby configurable options

Set your Google Analytics property ID, e.g. UA-12345678-9 in the config file:

```php
'bvdputte.ga.propId' => "UA-12345678-9",
```