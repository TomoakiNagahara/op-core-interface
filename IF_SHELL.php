<?php
/**	op-core-interface:/IF_SHELL.php
 *
 * @created    2026-03-27
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  Tomoaki Nagahara
 */

/**	Namespace
 *
 */
namespace OP;

/**	IF_SHELL
 *
 * @created    2026-03-27
 */
interface IF_SHELL extends IF_UNIT
{
	/**	Get the result of execution command.
	 *
	 * Returns the result of the command execution.
	 *
	 * <pre>
	 * if(!$ls = OP()->Unit()->Shell()->Get('ls') ){
	 *     $error = OP()->Unit()->Shell()->Error();
	 * }
	 * </pre>
	 *
	 * @created    2026-03-27
	 * @param      string       $command
	 * @return     string|false
	 */
	static function Get( string $command ) : string | false ;

	/**	Output of command.
	 *
	 * The result is output but not returned.
	 * Internally, passthru() is executed.
	 *
	 * <pre>
	 * if( OP()->Unit()->Shell()->Out('cat README.md') === false ){
	 *     $error = OP()->Unit()->Shell()->Error();
	 * }
	 * </pre>
	 *
	 * @created    2026-03-27
	 * @param      string       $command
	 * @return     bool
	 */
	static function Out( string $command ) : bool ;

	/**	Returns the error of the last executed command.
	 *
	 * Please be careful when executing commands consecutively.
	 * Errors from the command executed two steps prior cannot be get.
	 *
	 * <pre>
	 * if( OP()->Unit()->Shell()->Out('cat README.md') === false ){
	 *     $error = OP()->Unit()->Shell()->Error();
	 * }
	 * </pre>
	 *
	 * @created    2026-03-27
	 * @return     string
	 */
	static function Error() : string | null ;
}
