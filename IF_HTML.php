<?php
/**	op-core-interface:/IF_HTML.php
 *
 * @created    2026-02-02
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

/**	IF_HTML
 *
 */
interface IF_HTML extends IF_UNIT
{
	/**	Return the Bitcoin Wallet interface.
	 *
	 * @created    2026-02-02
	 * @param      array      $record
	 */
	public static function Record( array $record ) : void;
}
