<?php

declare(strict_types=1);

namespace tobydev27\libMCUnicodeChars;

class libMCUnicodeChars {

	/**
	 * Replace the characters in the string with the Minecraft Unicode characters.
	 *
	 * @param string $str
	 * @return string
	 */
	public static function replace(string $str): string {
		$replacements = [
			"{FORWARD_ARROW_BUTTON}" => "",
			"{LEFT_ARROW_BUTTON}" => "",
			"{BACKWARDS_ARROW_BUTTON}" => "",
			"{RIGHT_ARROW_BUTTON}" => "",
			"{JUMP_BUTTON}" => "",
			"{CROUCH_BUTTON}" => "",
			"{FLY_UP_BUTTON}" => "",
			"{FLY_DOWN_BUTTON}" => "",
			"{CRAFTABLE_BUTTON_ON}" => "",
			"{CRAFTABLE_BUTTON_OFF}" => "",
			"{FOOD_ICON}" => "",
			"{ARMOR_ICON}" => "",
			"{MINECOIN}" => "",
			"{CODE_BUILDER_BUTTON}" => "",
			"{IMMERSIVE_READER_BUTTON}" => "",
			"{TOKEN}" => ""
		];
		return str_replace(array_keys($replacements), $replacements, $str);
	}
}
