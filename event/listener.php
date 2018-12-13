<?php
/**
 *
 * @package       New Year Garland
 * @copyright (c) 2018 Татьяна5
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace tatiana5\newyeardecor\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var \tatiana5\newyeardecor\functions\cp_helper */
	protected $cp_helper;

	/**
	 * Constructor
	 *
	 * @param \phpbb\template\template                   $template
	 * @param \phpbb\user                                $user
	 * @param \tatiana5\newyeardecor\functions\cp_helper $cp_helper
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, \tatiana5\newyeardecor\functions\cp_helper $cp_helper)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->cp_helper = $cp_helper;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 */
	public static function getSubscribedEvents()
	{
		return array(
			'core.page_header'							=> 'page_header',
			// User prefs
			'core.ucp_prefs_view_data'                  => 'ucp_prefs_get_data',
			'core.ucp_prefs_view_update_data'           => 'ucp_prefs_set_data',
			'core.acp_users_prefs_modify_data'          => 'acp_prefs_get_data',
			'core.acp_users_prefs_modify_template_data' => 'acp_prefs_template_data',
			'core.acp_users_prefs_modify_sql'           => 'ucp_prefs_set_data', // For the ACP.
		);
	}

	function page_header()
	{
		$this->template->assign_vars(array(
			// Config
			'S_NYD_SNOW_TYPE'		=> $this->config['nyd_snow_type'],
			'S_NYD_SNOW_POSITION'	=> $this->config['nyd_snow_position'],
			'S_NYD_GARLAND_TYPE'	=> $this->config['nyd_garland_type'],
			'S_NYD_IMAGE_TYPE'		=> $this->config['nyd_image_type'],
			// User prefs
			'S_NYD_USER_SNOW'		=> $this->user->data['nyd_snow'],
			'S_NYD_USER_GARLAND'	=> $this->user->data['nyd_garland'],
			'S_NYD_USER_IMAGE'		=> $this->user->data['nyd_image'],
		));
	}

	/**
	 * Get user's options and display them in UCP Prefs View page
	 *
	 * @param object $event The event object
	 */
	public function ucp_prefs_get_data($event)
	{
		$data = $event['data'];

		// Request the user option vars and add them to the data array
		$data = array_merge($data, $this->cp_helper->nyd_get_user_prefs_data($this->user->data));

		// Output the data vars to the template
		$this->user->add_lang_ext('tatiana5/newyeardecor', 'newyeardecor');
		$this->template->assign_vars($this->cp_helper->nyd_user_prefs_data($data));

		$event['data'] = $data;
	}

	/**
	 * Add user options' state into the sql_array
	 *
	 * @param object $event The event object
	 */
	public function ucp_prefs_set_data($event)
	{
		$event['sql_ary'] = array_merge($event['sql_ary'], $this->cp_helper->nyd_set_user_prefs_data($event['data']));
	}

	/**
	 * Get user's options and display them in ACP Prefs View page
	 *
	 * @param object $event The event object
	 */
	public function acp_prefs_get_data($event)
	{
		$data = $event['data'];
		$user_row = $event['user_row'];
		$data = array_merge($data, $this->cp_helper->nyd_get_user_prefs_data($user_row));
		$event['data'] = $data;
	}

	/**
	 * Assign template data in the ACP
	 *
	 * @param object $event The event object
	 */
	public function acp_prefs_template_data($event)
	{
		$this->user->add_lang_ext('tatiana5/newyeardecor', 'newyeardecor');
		$data = $event['data'];
		$user_prefs_data = $event['user_prefs_data'];
		$user_prefs_data = array_merge($user_prefs_data, $this->cp_helper->nyd_user_prefs_data($data));
		$event['user_prefs_data'] = $user_prefs_data;
	}
}
