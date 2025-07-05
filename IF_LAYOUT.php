<?php
/**	op-coreinterface/IF_LAYOUT.php
 *
 * @created    2024-06-12
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/**	IF_LAYOUT
 *
 * @created    2024-06-12
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */
interface IF_LAYOUT extends IF_UNIT
{
	/**	Set / Get layout name.
	 *
	 * Set the layout name to choose which layout to apply.
	 * This layout name corresponds to the directory name of the layout package.
	 * All layouts should be stored under the "asset/layout" directory.
	 *
	 * The returned layout name is the name of the currently set layout.
	 *
	 * <pre>
	 * //  Set
	 * IF_LAYOUT::Name('layout_name');
	 *
	 * //  Get
	 * $layout_name = IF_LAYOUT::Name();
	 * </pre>
	 *
	 * @created    2025-07-05
	 * @param      string     $layout_name
	 * @return     string     $layout_name
	 */
	static function Name( string $name=null ) : string;
}
