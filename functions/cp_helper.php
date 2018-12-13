<?php
/**
 *
 * @package       New Year Decor
 * @copyright (c) 2018 Татьяна5
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace tatiana5\newyeardecor\functions;

class cp_helper
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config   $config
	 * @param \phpbb\request\request $request
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\request\request $request)
	{
		$this->config = $config;
		$this->request = $request;
	}

	/**
	 * Returns array of template variables for user settings in the ACP
	 *
	 * @param array $data Array with users preferences data
	 * @return array
	 */
	public function nyd_user_prefs_data($data)
	{
		return array(
			'S_NYD_USER_SNOW'		=> $data['nyd_snow'],
			'S_NYD_USER_GARLAND'	=> $data['nyd_garland'],
			'S_NYD_USER_IMAGE'		=> $data['nyd_image'],
		);
	}

	/**
	 * Returns quick reply related user settings data
	 *
	 * @param array $user_row User data array
	 * @return array
	 */
	public function nyd_get_user_prefs_data($user_row)
	{
		return array(
			'nyd_snow'		=> $this->request->variable('nyd_snow', (int) $user_row['nyd_snow']),
			'nyd_garland'	=> $this->request->variable('nyd_garland', (int) $user_row['nyd_garland']),
			'nyd_image'		=> $this->request->variable('nyd_image', (int) $user_row['nyd_image']),
		);
	}

	/**
	 * Returns array of SQL variables for user settings
	 *
	 * @param array $data Array with users preferences data
	 * @return array
	 */
	public function nyd_set_user_prefs_data($data)
	{
		return array(
			'nyd_snow'		=> $data['nyd_snow'],
			'nyd_garland'	=> $data['nyd_garland'],
			'nyd_image'		=> $data['nyd_image'],
		);
	}
}
