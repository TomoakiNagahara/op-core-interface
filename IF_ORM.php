<?php
/**	op-core-interface:/IF_ORM.php
 *
 * @created    2018-06-29
 * @porting    2025-11-30  from op-core-7:/interface/IF_ORM.php
 * @package    op-core
 * @subpackage interface
 * @copyright  2018 Tomoaki Nagahara All Rights Reserved.
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

/**	IF_ORM
 *
 * @created   2018-06-29
 */
interface IF_ORM
{
	/**	Find record at QQL.
	 *
	 * @created  2018-06-29
	 * @param    string      $QQL
	 * @param    array       $conditions
	 * @return  \OP\IF_ORM_RECORD
	 */
	public function Find($qql, $conditions);

	/**	Save array of record to database.
	 *
	 * @created  2018-06-29
	 * @param   \OP\IF_ORM_RECORD
	 */
	public function Save($record);
}
