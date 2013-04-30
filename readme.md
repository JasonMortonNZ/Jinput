# Jinput Laravel 4 Package
A Laravel 4 alternative to Input, allowing you to have XSS filter and sanitized user input.

## Usage - Examples

Jinput::all() - Grabs all input that Input::all() would normally give you, but XSS filtered.

Jinput::get('email') - Grabs an email field, just like Input::get('email') would do, again XSS filtered.