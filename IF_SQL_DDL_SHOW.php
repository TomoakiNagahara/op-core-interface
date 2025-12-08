<?php
/**	op-core-interface:/IF_SQL_DDL_SHOW.php
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

/**	IF_SQL_DDL_SHOW
 *
 * @created   2019-01-08
 */
interface IF_SQL_DDL_SHOW
{
	/**	Construct.
	 *
	 * @created   2019-01-08
	 * @param     IF_DATABASE $_DB
	 */
	public function __construct( IF_DATABASE & $_DB );

	/**	Generate Show Database SQL.
	 *
	 * @created   2019-01-08
	 * @param     string     $label
	 * @return    string
	 */
	public function Database( string $label='default' ) : string ;

	/**	Generate Show Table SQL.
	 *
	 * @created   2019-01-08
	 * @param     string     $label
	 * @param     string     $database
	 * @return    string
	 */
	public function Table( string $database='', string $label='default' ) : string ;

	/**	Generate Show Column SQL.
	 *
	 * @created   2019-01-08
	 * @param     string     $label
	 * @param     string     $table
	 * @param     string     $database
	 * @return    string
	 */
	public function Column( string $table='', string $database='', string $label='default' ) : string ;

	/**	Generate Show Index SQL.
	 *
	 * @created   2019-01-08
	 * @param     array      $config
	 * @return    string     $sql
	 */
	public function Index(array $config);

	/**	Generate Show Variables SQL.
	 *
	 * @created   2019-01-08
	 * @param     array      $config
	 * @return    string     $sql
	 */
	public function Variables(array $config);

	/**	Generate Show Status SQL.
	 *
	 * @created   2019-01-08
	 * @param     array      $config
	 * @return    string     $sql
	 */
	public function Status(array $config);

	/**	Generate Show Grants SQL.
	 *
	 * @created   2019-01-08
	 * @param     array      $config
	 * @return    string     $sql
	 */
	public function Grants(array $config);

	/**	Generate Show User SQL.
	 *
	 * @created   2019-04-09
	 * @param     array      $config
	 * @return    string     $sql
	 */
	public function User(array $config);
}
