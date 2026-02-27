<?php
/**	op-core-interface:/IF_BITCOIN.php
 *
 * @created    2026-01-19
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
interface IF_BITCOIN extends IF_UNIT
{
	/**	Return wallet interface.
	 *
	 * @created    2026-01-19
	 * @return     IF_BITCOIN_WALLET
	 */
	public static function Wallet() : IF_BITCOIN_WALLET ;

	/**	Return the Bitcoin Address interface.
	 *
	 * @created    2026-01-26
	 * @return     IF_BITCOIN_ADDRESS
	 */
	public static function Address() : IF_BITCOIN_ADDRESS ;
}
