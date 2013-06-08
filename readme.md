# Jinput Laravel 4 Package
A Laravel 4 alternative to Input, allowing you to have XSS filter and sanitized user input.

## Usage - Examples

Jinput::all() - Grabs all input that Input::all() would normally give you, but XSS filtered.

Jinput::get('email') - Grabs an email field, just like Input::get('email') would do, again XSS filtered.

## Installation

1. Add a new entry into the the `require: {}` array of the composer.json file in the root of your Laravel 4 project. It should look something like this:


`"require": {
	"laravel/framework": "4.0.*",
	"jasonnz/jinput": "dev-master"
},`

2. Add the following to the end of the 'providers' array in /app/config/app.php:

        'JasonNZ\Jinput\JinputServiceProvider'

3. Add the following to the end of the 'aliases' array in /app/config/app.php:

        'Jinput' => 'JasonNZ\Jinput\Jinput'

# How to Use

Simple! Instead of doing the usual `Input::get('value');` do this instead: `$input = Jinput::get('value');

You can also call `Jinput::all();` to get all form input;
