<?php
/**	op-core-interface:/IF_BITCOIN_WALLET.php
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

/**	IF_BITCOIN_WALLET
 *
 */
interface IF_BITCOIN_WALLET extends IF_UNIT
{
	/**	Create the Wallet.
	 *
	 * @created    2026-01-25
	 * @param      string     $name of wallet
	 * @return     bool
	 */
	public static function Create( string $name, ?string $passphrase=null ) : bool ;

	/**	Load the Wallet.
	 *
	 * @created    2026-01-25
	 * @param      string     $name of wallet
	 * @return     bool
	 */
	public static function Load( string $name ) : bool ;

	/**	Get the Balance in the Wallet.
	 *
	 * @created    2026-01-19
	 * @param      string     $name of wallet
	 * @return     float
	 */
	public static function Balance( string $name ) : float | false ;
}
