<?php
/**	op-core-interface:/IF_SQL_DDL_CREATE.php
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

/**	IF_SQL_DDL_CREATE
 *
 * @created   2019-01-08
 */
interface IF_SQL_DDL_CREATE
{
	/**	Construct.
	 *
	 * @created   2019-01-08
	 * @param     IF_DATABASE $_DB
	 */
	public function __construct(IF_DATABASE & $_DB);

	/**	Generate Create user SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function User(array $config);

	/**	Generate Create database SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Database(array $config);

	/**	Generate Create table SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Table(array $config);

	/**	Generate Create Column SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Column(array $config);

	/**	Generate Create Index SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Index(array $config);
}
