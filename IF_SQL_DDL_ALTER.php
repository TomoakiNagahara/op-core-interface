<?php
/**	op-core-interface:/IF_SQL_DDL_ALTER.php
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
