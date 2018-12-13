<?php
/**
 *
 * @package       New Year Decor
 * @copyright (c) 2018 Татьяна5
 * @license       http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

namespace tatiana5\newyeardecor\acp;

use tatiana5\newyeardecor\functions\acp_module_helper;

class newyeardecor_module extends acp_module_helper
{
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	public function main($id, $mode)
	{
		global $db;

		$this->db = $db;

		$this->ext_name ='tatiana5/newyeardecor';
		//$this->ext_langname = 'newyeardecor';
		$this->tpl_name = 'acp_newyeardecor';
		$this->form_key = 'config_newyeardecor';
		add_form_key($this->form_key);

		parent::main($id, $mode);
	}

	/**
	 * Generates the array of display_vars
	 */
	protected function generate_display_vars()
	{
		$this->display_vars = array(
			'lang'  => array('acp/board'),
			'title' => 'ACP_NEWYEARDECOR',
			'vars'  => array(
				'legend1'				=> '',
				'nyd_snow_type'			=> array('lang' => 'ACP_NYD_SNOW_TYPE', 'lang_explain' => '', 'validate' => 'int', 'type' => 'custom', 'method' => 'snow_type', 'explain' => false),
				'nyd_snow_position'		=> array('lang' => 'ACP_NYD_SNOW_POSITION', 'lang_explain' => '', 'validate' => 'bool', 'type' => 'custom', 'method' => 'snow_position', 'explain' => false),
				'nyd_garland_type'		=> array('lang' => 'ACP_NYD_GARLAND_TYPE', 'lang_explain' => '', 'validate' => 'int', 'type' => 'custom', 'method' => 'garland_type', 'explain' => false),
				'nyd_image_type'		=> array('lang' => 'ACP_NYD_IMAGE_TYPE', 'lang_explain' => '', 'validate' => 'int', 'type' => 'custom', 'method' => 'image_type', 'explain' => false),
				//
				'legend2'                 => 'ACP_SUBMIT_CHANGES',
			),
		);
	}

	function snow_type($value, $key = '')
	{
		$snow_types = array(
			0  => 'NO',
			1  => 'ACP_NYD_INTERACTION_SNOW',
			2  => 'ACP_NYD_SNOWFALL_1',
			3  => 'ACP_NYD_SNOWFALL_2',
			4  => 'ACP_NYD_SNOWFALL_3',
			5  => 'ACP_NYD_SNOWFALL_4',
			6  => 'ACP_NYD_SNOWFALL_5',
			7  => 'ACP_NYD_PARALLAX_SNOW',
			8  => 'ACP_NYD_MELTING_SNOW',
			9  => 'ACP_NYD_INTERACTIVE_SNOW',
			10 => 'ACP_NYD_IMAGE_SNOW',
			11 => 'ACP_NYD_SNOWSTORM',
		);

		$value = (int) $this->config['nyd_snow_type'];

		return '<select id="nyd_snow_type" name="config[nyd_snow_type]">' .
			build_select($snow_types, $value) .
		'</select>';
	}

	function snow_position($value, $key = '')
	{
		$radio_ary = array(1 => 'ACP_NYD_SNOW_HEADER', 0 => 'ACP_NYD_SNOW_BACKGROUND');

		$value = (int) $this->config['nyd_snow_position'];

		return h_radio('config[' . $key . ']', $radio_ary, $value);
	}

	function garland_type($value, $key = '')
	{
		$garland_types = array(
			0  => 'NO',
			1  => 'ACP_NYD_FLASHING_GARLAND',
			2  => 'ACP_NYD_NEW_YEAR_MOTNYA',
			3  => 'ACP_NYD_SMATHABLE_LIGHTS',
			4  => 'ACP_NYD_GARLAND_1',
			5  => 'ACP_NYD_GARLAND_2',
			6  => 'ACP_NYD_GARLAND_3',
			7  => 'ACP_NYD_GARLAND_4',
			8  => 'ACP_NYD_GARLAND_5',
			9  => 'ACP_NYD_GARLAND_6',
			10 => 'ACP_NYD_GARLAND_7',
		);

		$value = (int) $this->config['nyd_garland_type'];

		return '<select id="nyd_garland_type" name="config[nyd_garland_type]">' .
			build_select($garland_types, $value) .
		'</select>';
	}

	function image_type($value, $key = '')
	{
		$image_types = array(
			0 => 'NO',
			1 => 'ACP_NYD_IMAGE_1',
			2 => 'ACP_NYD_IMAGE_2',
			3 => 'ACP_NYD_IMAGE_3',
			4 => 'ACP_NYD_IMAGE_4',
			5 => 'ACP_NYD_IMAGE_5',
			6 => 'ACP_NYD_IMAGE_6',
		);

		$value = (int) $this->config['nyd_image_type'];

		return '<select id="nyd_image_type" name="config[nyd_image_type]">' .
			build_select($image_types, $value) .
		'</select>';
	}
}
