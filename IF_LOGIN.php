<?php
/**	op-core:/interface/IF_LOGIN.php
 *
 * @created    2026-01-20
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

/**	IF_LOGIN
 *
 * @created    2026-01-20
 */
interface IF_LOGIN extends IF_UNIT
{
	/**	Register account
	 *
	 */
	static function SignUp();

	/**	Log in
	 *
	 */
	static function SignIn();

	/**	Log out
	 *
	 */
	static function SignOut();

	/**	Returns whether user are logged in.
	 *
	 * @created    2026-01-17
	 * @return     bool
	 */
	static function isLoggedin() : ?bool;
}
