DepartementsFrance
==================

DepartementsFrance translate a french postal code or department number into his name.

Usage
-----
DepartementsFrance is a composer-compatible library. It's not on packagist, but to install you just need to add the repository definition and require to your composer.json file, then run `composer update`

    "repositories": [
		{
			"type": "git",
			"url": "https://github.com/spronkey/phphonex"
		}
	],
	"require": {
		"mrk/departementsfrance": "*"
	}

# Generating a Phonex code
To generate a Phonex code for a particular string, see the following code:
```php
$name = Mrk\DepartementsFrance\DepartementsFrance::get('67500'); // returns Bas-Rhin
```