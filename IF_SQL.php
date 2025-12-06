<?php
/**	op-core-interface:/IF_SQL.php
 *
 * @created    2018-04-20
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  (C) 2018 Tomoaki Nagahara
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

/**	IF_SQL
 *
 * @created   2018-04-20
 */
interface IF_SQL
{
	/**	Data Definition Language.
	 *
	 * @created  2019-01-08
	 * @return	 IF_SQL_DDL	 $_DDL
	 */
	public function DDL();

	/**	Data Manipulation Language.
	 *
	 * @created  2019-01-08
	 * @return	 IF_SQL_DML	 $_DML
	 */
	public function DML();

	/**	Data Control Language
	 *
	 * @created  2019-01-08
	 * @return	 IF_SQL_DCL	 $_DCL
	 */
	public function DCL();
}
