<?php
/**	op-core-interface:/IF_ORM_RECORD.php
 *
 * @created    2018-06-29
 * @porting    2025-11-30  from op-core-7:/interface/IF_ORM_RECORD.php
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

/**	IF_ORM_RECORD
 *
 * @created   2018-06-29
 */
interface IF_ORM_RECORD
{
	/**	Is this record matches conditions?
	 *
	 *  True: Found saved record.
	 * False: Empty record. (Do save is create new record.)
	 *
	 * @return  boolean  $io
	 */
	public function isFound();

	/**	Is this record values was valid by rule?
	 *
	 *  True: Can save.
	 * False: Can not save.
	 *
	 * @return  boolean  $io
	 */
	public function isValid();

	/**	Return already instantiated Form object.
	 *
	 * @return  IF_FORM  $form
	 */
	public function Form();
}
