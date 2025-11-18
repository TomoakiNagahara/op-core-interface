<?php
/**	op-core-interface:/IF_CI.php
 *
 * @created    2024-11-24
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/**	IF_CI
 *
 * @created    2024-11-24
 */
interface IF_CI extends IF_UNIT
{
	/**	Return IF_CI_Config
	 *
	 * @created    2024-11-24
	 * @return     IF_CI_Config
	 */
	static public function Config() : IF_CI_Config;
}

/**	IF_CI_Config
 *
 * @created    2024-11-24
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */
interface IF_CI_Config
{
	/**	Get config
	 *
	 * @created    2024-11-24
	 */
	public function Get();

	/**	Set config
	 *
	 * @created    2024-11-24
	 */
	public function Set($method, $result, $args);
}
