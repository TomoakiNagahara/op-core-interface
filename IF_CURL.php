<?php
/**	op-core-interface:/IF_CURL.php
 *
 * @created    2024-06-22  op-core-edge
 * @moved      2025-11-26  op-core-interface
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

/**	IF_CURL
 *
 * @created    2024-06-22
 */
interface IF_CURL
{
	/**	Get
	 *
	 * @created    2024-06-22
	 * @param      string     $uri
	 * @param      array      $data
	 * @return     bool       true is success
	 */
	static function Get(string $uri, array $data=[]) : bool;

	/**	Post
	 *
	 * @created    2024-06-22
	 * @param      string     $uri
	 * @param      array      $data
	 * @return     bool       true is success
	 */
	static function Post(string $uri, array $data=[]) : bool;

	/**	Json
	 *
	 * @created    2024-06-22
	 * @param      string     $uri
	 * @param      array      $data
	 * @return     bool       true is success
	 */
	static function Json(string $uri, array $data=[]) : bool;
}
