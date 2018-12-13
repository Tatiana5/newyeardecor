<?php
/**
*
* @package New Year Decor
* @copyright (c) Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\newyeardecor\migrations;

class v_0_0_1 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['nyd_version']) && version_compare($this->config['nyd_version'], '0.0.1', '>=');
	}

	public static function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_schema()
	{
		return array(
			'add_columns' => array(
				$this->table_prefix . 'users' => array(
					'nyd_snow'		=> array('BOOL', 1),
					'nyd_garland'	=> array('BOOL', 1),
					'nyd_image'		=> array('BOOL', 1),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'    => array(
				$this->table_prefix . 'users' => array('nyd_snow', 'nyd_garland', 'nyd_image'),
			),
		);
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('nyd_snow_type', '0')),
			array('config.add', array('nyd_snow_position', '1')),
			array('config.add', array('nyd_garland_type', '0')),
			array('config.add', array('nyd_image_type', '0')),

			// Current version
			array('config.add', array('nyd_version', '0.0.1')),

			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_NEWYEARDECOR')),
			array('module.add', array('acp', 'ACP_NEWYEARDECOR', array(
					'module_basename'	=> '\tatiana5\newyeardecor\acp\newyeardecor_module',
					'module_langname'	=> 'ACP_NEWYEARDECOR_EXPLAIN',
					'module_mode'		=> 'config_newyeardecor',
					'module_auth'		=> 'ext_tatiana5/newyeardecor && acl_a_extensions',
			))),
		);
	}
}
