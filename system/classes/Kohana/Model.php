<?php defined('SYSPATH') OR die('No direct script access.');
/**
 * Model base class. All models should extend this class.
 *
 * @package    Kohana
 * @category   Models
 * @author     Kohana Team
 * @copyright  (c) Kohana Team
 * @license    https://koseven.ga/LICENSE.md
 */
abstract class Kohana_Model {

	/**
	 * Create a new model instance.
	 *
	 *     $model = Model::factory($name);
	 *
	 * @param   string  $name   model name
	 * @return  Model
	 */
	public static function factory($name)
	{
		// Add the model prefix
		$class = 'Model_'.$name;

		return new $class;
	}

}
