[![PHPStan](https://github.com/thebigcrafter/libMCUnicodeChars/actions/workflows/phpstan.yml/badge.svg)](https://github.com/thebigcrafter/libMCUnicodeChars/actions/workflows/phpstan.yml)

<div align="center">
  <a href="https://github.com/thebigcrafter/libMCUnicodeChars">
    <img src="https://raw.githubusercontent.com/thebigcrafter/libMCUnicodeChars/main/assets/code-builder.png" alt="Logo" width="auto" height="auto">
  </a>

<h3 align="center">libMCUnicodeChars</h3>

  <p align="center">
    Minecraft Bedrock unicode characters library
    <br />
    <a href="https://github.com/thebigcrafter/libMCUnicodeChars/releases">Releases</a>
    ·
    <a href="https://github.com/thebigcrafter/libMCUnicodeChars/issues">Report Bug</a>
    ·
    <a href="https://github.com/thebigcrafter/libMCUnicodeChars/wiki">Wiki</a>
  </p>
</div>

## Usage

The library replaces named Bedrock UI tokens with their corresponding Unicode characters:

```php
use tobydev27\libMCUnicodeChars\libMCUnicodeChars;

$text = libMCUnicodeChars::replace("Press {JUMP_BUTTON} to jump");
```

Version 2.0.0 uses the `tobydev27\libMCUnicodeChars` namespace and antigen. Consumers of the older `MintoD\libMCUnicodeChars` namespace must update their imports and dependency reference.

# License
Copyright (c) tobydev27. All rights reserved.

Licensed under the [MIT](https://github.com/thebigcrafter/libMCUnicodeChars#MIT-1) license.
