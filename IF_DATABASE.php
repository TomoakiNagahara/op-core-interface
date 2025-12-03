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
	/**	Returns the PDO instantiated by the label.
	 *
	 * <pre>
	 * //  Connect using a config that only has access to the login table.
	 * if( OP()->Unit()->Database()->Connect( $config, 'login' ) ){
	 *     //  Manage multiple PDOs by the label.
	 *     $pdo = OP()->Unit()->Database()->PDO('login');
	 * }
	 * </pre>
	 *
	 * @created    2018-04-20
	 * @param      string     $label is connection label
	 * @return    \PDO
	 */
	public static function PDO( string $label = 'default' ) : \PDO | bool | null ;

	/**	Returns the connection config by label.
	 *
	 * <pre>
	 * //  Connect using a config that only has access to the login table.
	 * if( OP()->Unit()->Database()->Connect( $config, 'login' ) ){
	 *     //  Get connection config by the label.
	 *     $config = OP()->Unit()->Database()->Config('login');
	 * }
	 * </pre>
	 *
	 * @created    2018-11-13
	 * @param      string     $label is connection label
	 * @return	   array      $config
	 */
	public function Config( string $label = 'default' ) : array | null ;

	/**	Connect to database. And instantiate PDO.
	 *
	 * <pre>
	 * //  Database connection config.
	 * $config = [
	 *     'driver'   => 'mysql',
	 *     'host'     => '192.168.1.1',
	 *     'port'     => '3306',
	 *     'user'     => 'username',
	 *     'password' => 'password',
	 *     'database' => 'database',
	 *     'charset'  => 'utf8',
	 * ];
	 *
	 * //  Connect to the database.
	 * $io = OP()->Unit()->Database()->Connect( $config, 'label' );
	 * </pre>
	 *
	 * @created    2018-04-20
	 * @param      array      $config
	 * @param      string     $label is connection label
	 * @return     bool
	 */
	public function Connect( array $config, string $label = 'default' ) : bool ;

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
	 * <pre>
	 * //  Select article with pagination at public grant.
	 * $records = OP()->Unit()->Database()->QQL(' t_article.ai > 0 ', 'limit = 10, order = timestamp, offset = 1', 'public'); // public is select only
	 * </pre>
	 *
	 * @created   2018-04-20
	 * @param     string       $qql
	 * @param     string|array $option
	 * @param     string       $label
	 */
	public function QQL( string $qql, string|array $option='', string $label = 'default' );
}
