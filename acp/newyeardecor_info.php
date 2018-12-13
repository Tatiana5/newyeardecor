<?php
/**
*
* @package New Year Decor
* @copyright (c) 2018 Татьяна5
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace tatiana5\newyeardecor\acp;

class newyeardecor_info
{
	public function module()
	{
		return array(
			'filename'	=> '\tatiana5\newyeardecor\acp\newyeardecor_module',
			'title'		=> 'ACP_NEWYEARDECOR',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'config_newyeardecor'		=> array('title' => 'ACP_NEWYEARDECOR_EXPLAIN', 'auth' => 'ext_tatiana5/newyeardecor && acl_a_extensions', 'cat' => array('ACP_NEWYEARDECOR_EXPLAIN')),
			),
		);
	}
}
