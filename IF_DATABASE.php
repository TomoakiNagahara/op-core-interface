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

	/**	Count the number of records that match.
	 *
	 * <pre>
	 * $config = [
	 *     'table' => 't_article',
	 *     'limit' =>  -1,
	 *     'where' => 'publish != NULL',
	 * ];
	 * $num = OP()->Unit()->Database()->Count( $config );
	 * </pre>
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 * @return    integer   $count
	 */
	public function Count( array $config, string $label = 'default' );

	/**	Execute SELECT SQL.
	 *
	 * <pre>
	 * //  Select a single record.
	 * $select = [
	 *     'table' => 'table_name',
	 *     'where' => 'ai = 1',
	 *     'limit' =>  1,
	 * ];
	 * $record = OP()->Unit()->Database()->Select( $select );
	 *
	 * //  Select multiple records.
	 * $select = [
	 *     'table' => 'table_name',
	 *     'where' => 'ai > 0',
	 *     'limit' =>  -1, // -1 is unlimited
	 * ];
	 * $record = OP()->Unit()->Database()->Select( $select );
	 *
	 * //  Select record by multiple where conditions.
	 * $select = [
	 *     'table' => 'article',
	 *     'limit' =>  10,
	 *     'offset'=>   1,
	 *     'where' => [
	 *         'ai >= 1',
	 *         'category = IT',
	 *         'deleted != NULL',
	 *     ],
	 * ];
	 * $record = OP()->Unit()->Database()->Select( $select );
	 * </pre>
	 *
	 * @created   2018-04-20
	 * @param     array     $config
	 */
	public function Select( array $config, string $label = 'default' );

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
	public function SQL( string $SQL, string $type, string $label = 'default' );

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

	/**	Transaction is start.
	 *
	 * <pre>
	 * //  A transaction is valid for each PDO used in a connection.
	 * if(!OP()->Unit()->Database()->Transaction('DSN_LABEL') ){
	 *     return;
	 * }
	 * </pre>
	 *
	 * @created    2025-12-02
	 * @param string $label
	 */
	public function Transaction( string $label = 'default' ) : bool ;

	/**	Transaction is roll back.
	 *
	 * <pre>
	 * //  A transaction is valid for each PDO used in a connection.
	 * if(!OP()->Unit()->Database()->Rollback('DSN_LABEL') ){
	 *     OP()->Error('Rollback is failed.');
	 *     return;
	 * }
	 * </pre>
	 *
	 * @created    2025-12-02
	 * @param      string     $label
	 */
	public function Rollback( string $label = 'default' ) : bool ;

	/**	Transaction is commit.
	 *
	 * <pre>
	 * //  A transaction is valid for each PDO used in a connection.
	 * if(!OP()->Unit()->Database()->Commit('DSN_LABEL') ){
	 *     OP()->Error('Commit is failed.');
	 *     return;
	 * }
	 * </pre>
	 *
	 * @created    2025-12-02
	 * @param      string     $label
	 */
	public function Commit( string $label = 'default' ) : bool ;
}
