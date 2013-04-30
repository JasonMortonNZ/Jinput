<?php namespace JasonNZ\Jinput;

use Jason\Jinput\Security as Security;
use Illuminate\Support\Facades\Input as Input;

class Jinput extends Input {

	public static function test()
	{
		return Input::get('uid');
	}

	public static function get($key = null, $default = null, $trim = true, $xss_clean = true)
	{
		$input = Input::all();
		if (is_null($key))
		{
			return array_merge($input, static::query());
		}
		$value = array_get($input, $key);
		if (is_null($value))
		{
			return array_get(static::query(), $key, $default);
		}
		/**
		 * Trim if not set otherwise
		 */ 
		if( $trim === true ){
			$value = trim($value);
		}//if we trim the value
			return $xss_clean === true ? Security::xss_clean($value) : $value;
	}

	public static function all()
	{
		$oldInput = Input::all();
		$newInput = [];

		foreach ($oldInput as $key => $value) {
			$newInput[$key] = self::get2($value);
		}

		return $newInput;
	}

	public static function get2($value = "")
	{
		return Security::xss_clean($value);
	}
}