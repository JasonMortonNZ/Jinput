# Jinput Laravel 4 Package
A Laravel 4 alternative to Input, allowing you to have XSS filter and sanitized user input.

## Usage - Examples

Jinput::all() - Grabs all input that Input::all() would normally give you, but XSS filtered.

Jinput::get('email') - Grabs an email field, just like Input::get('email') would do, again XSS filtered.

## Installation

1. Add the following to the end of the 'providers' array in /app/config/app.php:

'Jason\Jinput\JinputServiceProvider'

2. Add the following to the end of the 'aliases' array in /app/config/app.php:

'Jinput' => 'JasonNZ\Jinput\Jinput'