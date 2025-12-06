<?php
/**	op-core-interface:/IF_SQL_DDL_ALTER.php
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

/**	IF_SQL_DDL_ALTER
 *
 * @created   2019-01-08
 */
interface IF_SQL_DDL_ALTER
{
	/**	Construct.
	 *
	 * @created   2019-01-08
	 * @param     IF_DATABASE $_DB
	 */
	public function __construct(IF_DATABASE & $_DB);
}
