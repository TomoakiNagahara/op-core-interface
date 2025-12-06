<?php
/**	op-core:/interface/IF_API.php
 *
 * @created    2024-02-09
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  (C) 2024 Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	IF_API
 *
 * @created    2024-02-09
 */
interface IF_API extends IF_UNIT
{
	/**	Register for admin information.
	 *
	 * <pre>
	 * OP()->Unit()->Api()->Admin('endpoint', __FILE__);
	 * </pre>
	 *
	 * @created    2024-02-09
	 */
	static public function Admin(string $key, $value);

	/**	Register error message for end user.
	 *
	 * <pre>
	 * OP()->Unit()->Api()->Error("This is error message.");
	 * </pre>
	 *
	 * @created    2024-02-09
	 */
	static public function Error(string $message);

	/**	Register result.
	 *
	 * <pre>
	 * OP()->Unit()->Api()->Result(['color'=>'blue']);
	 * </pre>
	 *
	 * @created    2024-02-09
	 */
	static public function Result($value);

	/**	Output JSON.
	 *
	 * <pre>
	 * OP()->Unit()->Api()->Out();
	 * </pre>
	 *
	 * @created    2024-02-09
	 */
	static public function Out();
}
