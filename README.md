# This will help short text for prompts 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sundance-solutions/larachain-trim-text.svg?style=flat-square)](https://packagist.org/packages/sundance-solutions/larachain-trim-text)
[![Fix PHP code style issues](https://github.com/alnutile/larachain-trim-text/actions/workflows/fix-php-code-style-issues.yml/badge.svg)](https://github.com/alnutile/larachain-trim-text/actions/workflows/fix-php-code-style-issues.yml)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sundance-solutions/larachain-trim-text/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sundance-solutions/larachain-trim-text/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sundance-solutions/larachain-trim-text.svg?style=flat-square)](https://packagist.org/packages/sundance-solutions/larachain-trim-text)

This is basically a copy of a LangChain library that reduces the text so that an LLM can read it and it saves characaters. Some of the ideas can be seen [here](https://www.datacamp.com/tutorial/stemming-lemmatization-python)

## Installation

You can install the package via composer:

```bash
composer require sundance-solutions/larachain-trim-text
```

## Usage

```php 
<?php

it('test trims', function () {
    $example = 'Lots of text......';

    $trimmer = new SundanceSolutions\LarachainTrimText\LarachainTrimText();
    $results = $trimmer->trim($example);
    expect($results)->toBe($expected);
});
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alfred Nutile](https://github.com/alnutile)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
