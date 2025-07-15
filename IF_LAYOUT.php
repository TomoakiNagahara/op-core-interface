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
	 * @return     string     $current_layout_name
	 */
	static function Name( ?string $name=null ) : string;

	/**	Set / Get layout execute flag.
	 *
	 * Set whether to apply a layout or not.
	 * The returned value is the current flag.
	 *
	 * <pre>
	 * //  Set
	 * IF_LAYOUT::Execute(true);
	 *
	 * //  Get
	 * $execute = IF_LAYOUT::Execute();
	 * </pre>
	 *
	 * @created    2025-07-05
	 * @param      bool       $execute
	 * @return     bool       $current_value
	 */
	static function Execute( ?bool $execute=null ) : bool;
}
