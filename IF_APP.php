<?php
/**	op-core-interface:/IF_APP.php
 *
 * @created    2019-02-20
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

/**	IF_APP
 *
 * @created    2019-02-20
 */
interface IF_APP extends IF_UNIT
{
	/**	Output content.
	 *
	 * @created    2024-07-09
	 */
	static public function Content();
}
