<?php
/**
 * Application contract.
 *
 * The Application class should be the primary class for working with
 * and launching the app. It also extends the `Container` contract
 *
 * @package   Backdrop
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2019-2022. Benjamin Lu
 * @link      https://github.com/benlumia007/backdrop-contracts
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Benlumia007\Backdrop\Contracts\Foundation;
use Benlumia007\Backdrop\Container\Contracts\Container;

/**
 * Application interface
 *
 * @since  1.0.0
 * @access public
 */
interface Application extends Container {
	/**
	 * Adds a service provider.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  mixed  $provider
	 * @return void
	 */
	public function provider( $provider );

	/**
	 * Adds a static proxy alias.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  string  $class_name
	 * @param  string  $alias
	 * @return void
	 */
	public function proxy( $class_name, $alias );
}
