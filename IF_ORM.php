<?php
/**	op-core-interface:/IF_ORM.php
 *
 * @created    2018-06-29
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 * @created    2024-06-12
 */
namespace OP;

/**	IF_ORM
 *
 * @created    2018-06-29
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
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
