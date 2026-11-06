# libMCUnicodeChars

libMCUnicodeChars is a PocketMine-MP virion that replaces named Bedrock UI
tokens with the private-use Unicode characters used by the Bedrock client.
It is a build-time library, not a standalone plugin and not a PHAR to copy into
the server's `plugins/` directory.

[![PHPStan](https://github.com/thebigcrafter/libMCUnicodeChars/actions/workflows/phpstan.yml/badge.svg)](https://github.com/thebigcrafter/libMCUnicodeChars/actions/workflows/phpstan.yml)
[![Latest release](https://img.shields.io/github/v/release/thebigcrafter/libMCUnicodeChars)](https://github.com/thebigcrafter/libMCUnicodeChars/releases/latest)
[![License](https://img.shields.io/github/license/thebigcrafter/libMCUnicodeChars)](LICENSE)

## Requirements

| Requirement | Value |
| --- | --- |
| Virion | API `4.0.0` in `virion.yml` |
| DevTools | Virion spec `3.0` metadata is provided for shading |
| PHP | Use the PHP version required by the consuming plugin |

The current package uses the antigen and namespace
`tobydev27\libMCUnicodeChars`. Consumers using the old
`MintoD\libMCUnicodeChars` namespace must update their imports and dependency
reference.

## Installation in a consumer plugin

Add the package as a Composer or DevTools virion dependency in the consuming
plugin. The library is shaded into the consumer PHAR during its build.

```yaml
# devtools.yml in the consumer plugin
virion:
  - ../libMCUnicodeChars
```

The exact dependency declaration depends on the consumer's Composer and
DevTools workflow. Do not install this repository as an independent server
plugin.

## Usage

Call `replace()` with a string containing the named Bedrock tokens:

```php
use tobydev27\libMCUnicodeChars\libMCUnicodeChars;

$text = libMCUnicodeChars::replace("Press {JUMP_BUTTON} to jump");
```

`replace()` returns the string with every known token replaced. Unknown text is
left unchanged.

The current token set includes:

| Token group | Tokens |
| --- | --- |
| Controls | `{FORWARD_ARROW_BUTTON}`, `{LEFT_ARROW_BUTTON}`, `{BACKWARDS_ARROW_BUTTON}`, `{RIGHT_ARROW_BUTTON}`, `{JUMP_BUTTON}`, `{CROUCH_BUTTON}`, `{FLY_UP_BUTTON}`, `{FLY_DOWN_BUTTON}` |
| Crafting and UI | `{CRAFTABLE_BUTTON_ON}`, `{CRAFTABLE_BUTTON_OFF}`, `{CODE_BUILDER_BUTTON}`, `{IMMERSIVE_READER_BUTTON}` |
| Items and economy | `{FOOD_ICON}`, `{ARMOR_ICON}`, `{MINECOIN}`, `{TOKEN}` |

These characters use Bedrock's private-use glyphs. Their visual appearance is
defined by the client resource data, so test the rendered text on the Bedrock
client versions supported by the consumer plugin.

## API

The public API is intentionally small:

```php
public static function replace(string $str): string
```

The method is pure string replacement. It does not read configuration, access
the server, or register events.

## Build and verification

The CI workflow runs the DevTools virion build and PHPStan analysis. A consumer
project should verify the shaded PHAR as well as the library source because a
virion can pass its own analysis while a consumer has an incompatible shading
configuration.

## License and attribution

libMCUnicodeChars is released under the MIT license. See [LICENSE](LICENSE) for
the complete text. The package retains the `tobydev27` namespace and author
attribution.
