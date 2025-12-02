<?php
/**	op-core:/interface/IF_DATABASE.php
 *
 * @created    2018-04-20
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @copyright  2018 Tomoaki Nagahara All Rights Reserved.
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	namespace
 *
 * @created   2019-03-04
 */
namespace OP;

/**	IF_DATABASE
 *
 * @created    2018-04-20
 */
interface IF_DATABASE
{
	/**	Return instanciated PDO by label.
	 *
	 * @created    2018-04-20
	 * @param      string     $label is connection label
	 * @return    \PDO
	 */
	public function PDO( string $label = 'default' ) : \PDO ;

	/**	Get configuration.
	 *
	 * <pre>
	 * //  Configuration.
	 * $config = [];
	 * $conifg['prod']     = 'mysql';
	 * $conifg['host']     = 'localhost';
	 * $conifg['port']     = '3306';
	 * $conifg['user']     = 'username';
	 * $conifg['password'] = 'password';
	 * $conifg['charset']  = 'utf8';
	 * </pre>
	 *
	 * @addition 2018-11-13
	 * @return	 array		 $config
	 */
	public function Config();

	/**	Connect to database. And instantiate PDO.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 * @return   \PDO
	 */
	public function Connect($config);

	/**	Returns whether connected to a database.
	 *
	 * <pre>
	 * $io = OP()->Unit()->Database()->isConnect('label');
	 * </pre>
	 *
	 * @created    2025-12-01
	 * @param      string     $label is connection label
	 * @return     bool
	 */
	public function isConnect( string $label = 'default' ) : bool ;

	/**	Count number of records at SELECT conditions.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 * @return    integer   $count
	 */
	public function Count($config);

	/**	Execute SELECT SQL.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function Select($config);

	/**	Execute INSERT SQL.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function Insert($config);

	/**	Execute UPDATE SQL.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function Update($config);

	/**	Execute DELETE SQL.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function Delete($config);

	/**	Execute to SQL query string. And return records array.
	 *
	 * @created   2018-04-20
	 * @param     string    $SQL
	 * @param     string    $type
	 * @return    array     $record
	 */
	public function SQL(string $SQL, string $type);

	/**	Execute Quick Query Language string.
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function QQL(string $config, array $options);
}
