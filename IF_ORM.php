<?php
/**	op-core-interface:/IF_ORM.php
 *
 * <pre>
 * //  Get ORM's Record Object.
 * $record = OP()->Unit()->ORM()->Find(' ai > 0 ');
 * $record->Count(); // Return match record number.
 *
 * //  Change record value.
 * $record->touch = true;
 * $record->Save(); // Returns number is updated record number. False is failed.
 *
 * //  Display UI by form.
 * $record->Form(); // Automatically validate and save.
 * </pre>
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
interface IF_ORM extends IF_UNIT
{
	/**	Find record at QQL.
	 *
	 * @created  2018-06-29
	 * @param    string      $QQL
	 * @param    array       $conditions
	 * @return  \OP\IF_ORM_RECORD
	 */
	public function Find( string $qql, array $conditions=[] ) : IF_ORM_RECORD ;

	/**	Save array of record to database.
	 *
	 * @created  2018-06-29
	 * @param   \OP\IF_ORM_RECORD
	 */
	public function Save( IF_ORM_RECORD & $record) ;
}
