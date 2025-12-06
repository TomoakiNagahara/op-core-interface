<?php
/**	op-core-interface:/IF_QQL.php
 *
 * @created    2018-05-14
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  (C) 2018 Tomoaki Nagahara
 */

/**	Declare strict
 *
 * @created    2024-07-13
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	IF_QQL
 *
 * @created    2018-05-14
 */
interface IF_QQL extends IF_UNIT
{
	/**	Open database resource.
	 *
	 * @created    2024-07-13
	 * @param      string     $dsn
	 * @return     string     $label
	 */
	static public function Open(string $dsn='') : string;

	/**	Open database resource.
	 *
	 * @created    2024-07-13
	 * @param      string     $label
	 */
	static public function Close(string $label='');

	/**	Insert or Update
	 *
	 * <pre>
	 * //  Always single record insert.
	 * $ai = QQL::Set('t_user', ['name'=>$name, 'email'=>$email]);
	 *
	 * //  Update if passed "where". Default limit 1.
	 * $count = QQL::Set('t_user', ['email'=>$email], ['name'=>$name]);
	 *
	 * //  Update all is limit -1.
	 * $count = QQL::Set('t_user', ['available'=>false], ['country'=>'jp'], ['limit'=>-1]);
	 * </pre>
	 *
	 * @created    2024-07-12
	 * @param      string     $qql
	 * @param      array      $set
	 * @param      array      $where
	 * @param      array      $option
	 * @return     int        $ai or $count
	 */
	static public function Set(string $qql, array $set, array $where=[], array $option=[]);

	/**	Select
	 *
	 * <pre>
	 * //  Simple select. "ai" is auto increment id. QQL is default limit 1.
	 * $record = QQL::Get(" t_user.ai = $ai ");
	 *
	 * //  Not equal
	 * $record = QQL::Get(" t_user.ai != $ai ");
	 *
	 * //  Great equal then
	 * $record = QQL::Get(" t_user.ai >= $ai ");
	 *
	 * //  Select fields
	 * $record = QQL::Get(" name, email <- t_user.ai = $ai ");
	 *
	 * //  Get max value
	 * $record = QQL::Get(" max(ai) as max <- t_user.ai ");
	 *
	 * //  Table LEFT JOIN
	 * $record = QQL::Get(" t_user.ai + t_user_detail.ai = $ai ");
	 *
	 * //  Table RIGHT JOIN
	 * $record = QQL::Get(" t_user.ai +> t_user_detail.ai = $ai ");
	 *
	 * //  Table INNER JOIN
	 * $record = QQL::Get(" t_user.ai >+< t_user_detail.ai = $ai ");
	 *
	 * //  Table LEFT OUTER JOIN
	 * $record = QQL::Get(" t_user.ai <+< t_user_detail.ai = $ai ");
	 *
	 * //  Table RIGHT OUTER JOIN
	 * $record = QQL::Get(" t_user.ai >+> t_user_detail.ai = $ai ");
	 *
	 * //  Table JOIN use as ":"
	 * $record = QQL::Get(" u.ai:id, p.price:amount <- t_user_payment:p.user + t_user:u.ai = $ai ");
	 *
	 * //  Use "WHERE" ai = 1
	 * //  SELECT * FROM t_user WHERE ai = 1
	 * $records = QQL::Get(" t_user ", ['ai'=>1]);
	 *
	 * //  Use "WHERE" ai != 1
	 * //  SELECT * FROM t_user WHERE ai != '1'
	 * $records = QQL::Get(" t_user ", ['ai != 1']);
	 *
	 * //  Use "WHERE" ai >= 1
	 * //  SELECT * FROM t_user WHERE ai >= '1'
	 * $records = QQL::Get(" t_user ", ['ai >= 1']);
	 *
	 * //  Search Apple users
	 * //  SELECT * FROM t_user WHERE sp = 'ios' OR pc = 'mac'
	 * $records = QQL::Get(" t_user ", [], ['or'=>['sp'=>'ios','pc'=>'mac']]);
	 *
	 * //  Group
	 * //  SELECT count(*) FROM t_user GROUP BY country
	 * $records = QQL::Get(" count(*) <- t_user ", [], ['group'=>'country']);
	 *
	 * //  Pager
	 * //  SELECT * FROM t_user LIMIT 10 OFFSET 10
	 * $records = QQL::Get(" t_user ", [], ['limit'=>10, 'offset'=>10]);
	 *
	 * //  Native Pager
	 * //  SELECT * FROM t_user LIMIT 10 OFFSET 0
	 * $records = QQL::Get(" t_user ", [], ['limit'=>10, 'page'=>0]);
	 * //  SELECT * FROM t_user LIMIT 10 OFFSET 10
	 * $records = QQL::Get(" t_user ", [], ['limit'=>10, 'page'=>1]);
	 *
	 * //  Option
	 * $records = QQL::Get(' t_user ', 'timestamp > -1 month', 'group(region), limit(10), offset(0), page(1, 10), order(timestamp, desc)');
	 * </pre>
	 *
	 * @created    2024-07-12
	 * @param      string     $qql
	 * @param      array      $where
	 * @param      array      $option
	 * @return     array      $record
	 */
	static public function Get(string $qql, array $where=[], array $option=[]);

	/**	Return error.
	 *
	 * @created    2024-07-12
	 * @return     string
	 */
	static public function Error() : string;
}
