# Bazaar

Bazaar is a random item and Heroku-ish name generator ported from the @raycchan's ruby version https://github.com/raycchan/bazaar.

## Installation

Install the latest version with

```bash
$ composer require dboskovic/bazaar
```

## Basic Usage

```php
<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Bazaar\Bazaar;

// create a log channel
Bazaar::object();
    // => "Dirty rubberband"
    // => "Unusual pillow"
    // => "Slippery toothpaste"

Bazaar::super_object();
    // => "Unwavering foliage"
    // => "Tranquil snowflake"
    // => "Exuberant drylands"

Bazaar::heroku();
    // => "inquisitive-cavern-6617"
    // => "jubilant-sunset-9301"
    // => "frightened-geyser-4542"

Bazaar::adj();
    // => "Colossal"
Bazaar::item();
    // => "Javelin"
Bazaar::super_adj();
    // => "Limitless"
Bazaar::super_item();
    // => "Lagoon"
```


## Contributing

1. Fork it
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create new Pull Request
