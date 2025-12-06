<?php
/**	op-core-interface:/IF_SQL_DCL.php
 *
 * @created    2019-01-08
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  (C) 2019 Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

/**	IF_SQL_DCL
 *
 * @created   2019-01-08
 */
interface IF_SQL_DCL
{
	/**	Construct.
	 *
	 * @created  2019-01-08
	 * @param    IF_DATABASE $_DB
	 */
	public function __construct(IF_DATABASE & $_DB);

	/**	Generate Grant SQL.
	 *
	 * @created  2019-01-08
	 * @param    array      $config
	 */
	public function Grant();

	/**	Generate Revoke SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Revoke(array $config);

	/**	Generate Begin SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Begin(array $config);

	/**	Generate Commit SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Commit(array $config);

	/**	Generate Rollback SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Rollback(array $config);

	/**	Generate Lock SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Lock(array $config);

	/**	Generate Savepoint SQL.
	 *
	 * @created  2019-01-08
	 * @param    array       $config
	 */
	public function Savepoint(array $config);
}
