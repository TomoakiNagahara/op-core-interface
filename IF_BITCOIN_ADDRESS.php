<?php
/**	op-core-interface:/IF_BITCOIN_ADDRESS.php
 *
 * @created    2026-01-26
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

/**	IF_BITCOIN
 *
 */
interface IF_BITCOIN_ADDRESS extends IF_UNIT
{
	/**	Get the Bitcoin address for each wallet.
	 *
	 * @created    2026-03-09
	 * @param      string     $wallet
	 * @param      string     $label
	 * @return     string|false
	 */
	public static function Get( string $wallet, string $label ) : string | false ;
}
