# key-normalizer

[![PHP Version](https://img.shields.io/packagist/php-v/petrenkoanton/key-normalizer)](https://packagist.org/packages/petrenkoanton/key-normalizer)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/petrenkoanton/key-normalizer.svg)](https://packagist.org/packages/petrenkoanton/key-normalizer)
[![Total Downloads](https://img.shields.io/packagist/dt/petrenkoanton/key-normalizer.svg)](https://packagist.org/packages/petrenkoanton/key-normalizer)
[![License](https://img.shields.io/packagist/l/petrenkoanton/key-normalizer)](https://packagist.org/packages/petrenkoanton/key-normalizer)

[![PHP Composer](https://github.com/PetrenkoAnton/key-normalizer/actions/workflows/tests.yml/badge.svg)](https://github.com/PetrenkoAnton/key-normalizer/actions/workflows/tests.yml)
[![Coverage Status](https://coveralls.io/repos/github/PetrenkoAnton/key-normalizer/badge.svg)](https://coveralls.io/github/PetrenkoAnton/key-normalizer)
[![type-coverage](https://shepherd.dev/github/petrenkoanton/key-normalizer/coverage.svg)](https://shepherd.dev/github/petrenkoanton/key-normalizer)
[![psalm-level](https://shepherd.dev/github/petrenkoanton/key-normalizer/level.svg)](https://shepherd.dev/github/petrenkoanton/key-normalizer)
[![Build Status](https://github.com/petrenkoanton/key-normalizer/workflows/coding-style/badge.svg)](https://github.com/petrenkoanton/key-normalizer/actions)

[Installation](#installation) | [Functionality](#functionality) | [Usage](#usage) | [For developers](#for-developers) | [License](#license) | [Related projects](#related-projects)

## Installation

### Requirements

- php 7.4 or higher

### Composer

```bash
composer require petrenkoanton/key-normalizer
```

## Functionality

### Public methods

#### [KeyNormalizer](./src/KeyNormalizer.php)

| Method                           | Exception |
|:---------------------------------|:----------|
| toCamelCase(string $key): string | -         |
| toSnakeCase(string $key): string | -         |

## Usage

```php
<?php

declare(strict_types=1);

use KeyNormalizer\KeyNormalizer;

KeyNormalizer::toCamelCase('test_test_test'); // testTestTest
KeyNormalizer::toSnakeCase('testTestTest'); // test_test_test
```

## For developers

### Requirements

Utils:
- make
- [docker-compose](https://docs.docker.com/compose/gettingstarted)

### Setup

#### Initialize

Create `./docker/.env`
```bash
make init 
```

#### Build container with the different php version

php 8.0
```bash
make up80
```

php 8.1
```bash
make up81
```

php 8.2
```bash
make up82
```

php 8.3
```bash
make up83
```

Also you need to run this command before build container with another php version.
It will remove network and previously created container.
```bash
make down
```

#### Other commands

Go inside of the container
```bash
make inside
```

Check php version
```bash
make php-v
```

Check package version
```bash
make v
```

### Run tests and linters

Run [PHPUnit](https://github.com/sebastianbergmann/phpunit) tests with code coverage
```bash
make test-c 
```

Run [Psalm](https://github.com/vimeo/psalm)
```bash
make psalm
```

Run [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)
```bash
make phpcs
```

Or by all-in-one command from the inside of the container

```bash
composer check-all
```

## License

The [key-normalizer](https://github.com/PetrenkoAnton/key-normalizer) library is open-sourced software licensed under the
[MIT license](./LICENSE).

## Related projects

- [PetrenkoAnton/php-collection](https://github.com/petrenkoanton/php-collection)
- [PetrenkoAnton/php-dto](https://github.com/petrenkoanton/php-dto)