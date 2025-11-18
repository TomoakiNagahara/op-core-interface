<?php
/**	op-core:/interface/IF_FORM.php
 *
 * @created   2018-04-20
 * @version    1.0
 * @package    op-core
 * @subpackage interface
 * @author     Tomoaki Nagahara
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/**	namespace
 *
 */
namespace OP;

/**	IF_FORM
 *
 * @created    2018-04-20
 */
interface IF_FORM
{
	/**	Set configuration.
	 *
	 * @created   2018-04-20
	 * @param     array|string config array or config file path
	 * @return    array       $config
	 */
	public function Config($config);

	/**	Token validation.
	 *
	 * @created   2019-03-08
	 * @return    boolean    True is token is match.
	 */
	public function Token();

	/**	Start form. Output open FORM tag.
	 *
	 * @created   2018-04-20
	 */
	public function Start();

	/**	Finish form. Output close FORM tag.
	 *
	 * @created   2018-04-20
	 */
	public function Finish();

	/**	Display input label.
	 *
	 * @created   2018-04-20
	 * @param     string    $name
	 */
	public function Label(string $input_name);

	/**	Display input tag.
	 *
	 * @created   2018-04-20
	 * @param     string    $name
	 */
	public function Input(string $input_name);

	/**	Display submitted value.
	 *
	 * @created   2018-04-20
	 * @param     string    $name
	 */
	public function Value(string $input_name);

	/**	Display error message.
	 *
	 * @created   2018-04-20
	 * @param     string    $name
	 */
	public function Error(string $input_name);

	/**	Clear input value.
	 *
	 * @created   2019-03-08
	 * @param     string    $input_name
	 */
	public function Clear(string $input_name='');

	/**	Overwrite input attributes.
	 *
	 * @created   2018-06-29
	 * @param     array     $input
	 */
	public function SetInput(string $input_name, array $input);

	/**	Overwrite input options.
	 *
	 * @created   2018-06-29
	 * @param     array     $option
	 */
	public function SetOption(string $input_name, array $option);

	/**	Get submitted value.
	 *
	 * @created   2018-06-29
	 * @param     string       $name
	 * @param     string|array $value
	 */
	public function GetValue(string $input_name);

	/**	Validate input value.
	 *
	 * @created   2018-06-29
	 * @param     string    $input_name
	 * @return    array     $validate
	 */
	public function Validate(string $input_name='');

	/**	Is validation result.
	 *
	 * <pre>
	 * Return value is null are not match token.
	 * Return value is bool are not match validate.
	 * </pre>
	 *
	 * @created   2019-03-15
	 * @return   null|boolean
	 */
	public function isValidate() : bool;
}
