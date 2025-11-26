<?php
/**	op-core-interface:/IF_SQL_DDL_DROP.php
 *
 * @created    2019-01-08
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All rights reserved.
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 * @created   2019-03-04
 */
namespace OP;

/**	IF_SQL_DDL_DROP
 *
 * @created   2019-01-08
 */
interface IF_SQL_DDL_DROP
{
	/**	Construct.
	 *
	 * @created   2019-01-08
	 * @param     IF_DATABASE $_DB
	 */
	public function __construct(IF_DATABASE & $_DB);

	/**	Generate Drop User SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function User(array $config);

	/**	Generate Drop Database SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Database(array $config);

	/**	Generate Drop Table SQL.
	 *
	 * @created   2019-01-08
	 * @param     array     $config
	 * @return    string    $sql
	 */
	public function Table(array $config);
}
