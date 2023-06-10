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
    $example = 'But don’t humans also have genuinely original ideas?” Come on, read a fantasy book. It’s either a Tolkien clone, or it’s A Song Of Ice And Fire. Tolkien was a professor of Anglo-Saxon language and culture; no secret where he got his inspiration. A Song Of Ice And Fire is just War Of The Roses with dragons. Lannister and Stark are just Lancaster and York, the map of Westeros is just Britain (minus Scotland) with an upside down-Ireland stuck to the bottom of it – wake up, sheeple! Dullards blend Tolkien into a slurry and shape it into another Tolkien-clone. Tolkien-level artistic geniuses blend human experience, history, and the artistic corpus into a slurry and form it into an entirely new genre. Again, the difference is how finely you blend and what spices you add to the slurry.';

    $expected = 'dont human genuin origin ideas? Come on, read fantasi book. Tolkien clone, Song Ice Fire. Tolkien professor Anglo-saxon languag culture; secret got inspiration. Song Ice just War Rose dragons. Lannist Stark just Lancast York, map Westero just Britain (minus Scotland) upsid down-ireland stuck  wake up, sheeple! Dullard blend Tolkien slurri shape Tolkien-clone. Tolkien-level artist genius blend human experience, history, artist corpus slurri form entir new genre. Again, differ fine blend spice add slurry.';

    $trimmer = new SundanceSolutions\LarachainTrimText\LarachainTrimText();
    $results = $trimmer->handle($example);
    expect($results)->toBe($expected);
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
