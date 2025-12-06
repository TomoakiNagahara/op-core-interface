<?php
/**	op-core-interface:/IF_WEBPACK.php
 *
 * @created    2023-01-22
 * @license    Apache-2.0
 * @package    op-core
 * @subpackage interface
 * @copyright  (C) 2023 Tomoaki Nagahara
 */

/**	Declare strict
 *
 */
declare(strict_types=1);

/**	namespace
 *
 */
namespace OP;

/**	IF_APP
 *
 * @created    2023-01-22
 */
interface IF_WEBPACK
{
	/**	Automatically processes of depending on the argument.
	 *
	 *  <pre>
	 *  //  Register files to pack.
	 *  OP()->WebPack()->Auto('index.js', 'index.css');
	 *
	 *  //  Registration of directory.
	 *  OP()->WebPack()->Auto('./');
	 *
	 *  //  Output packed file.
	 *  OP()->WebPack()->Auto();
	 *  </pre>
	 */
	static public function Auto();

	/**	Returns the hash value of the packed files.
	 *
	 *  <pre>
	 *  $hash = OP()->WebPack()->Hash();
	 *  echo "<script src='/js/?hash={$hash}'></script>";
	 *  </pre>
	 */
	static public function Hash(string $extension) : string;

	/**	Register files or directories.
	 *
	 *  Need to automatically calculate file extension and current directory.
	 *
	 *  <pre>
	 *  OP()->WebPack()->Register('foo.js', 'foo.css', './bar/', 'app:/bar/');
	 *  </pre>
	 *
	 * @created    2024-08-05
	 * @param      string|array $paths
	 */
	static public function Register($paths);

	/**	Output packed source code.
	 *
	 * <pre>
	 * OP()->WebPack()->Output();
	 * </pre>
	 *
	 * @created    2024-08-05
	 */
	static public function Output(string $extension);
}
