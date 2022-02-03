<?php

/**
 *
 * Thanks For Posts extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2013 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace gfksx\thanksforposts\migrations;

class v_3_1_0 extends \phpbb\db\migration\migration
{

	protected $thanks_table_exists;
	protected $poster_id_field_exists;

	public function effectively_installed()
	{
		return isset($this->config['thanks_for_posts_version']) && version_compare($this->config['thanks_for_posts_version'], '3.1.0', '>=');
	}

	static public function depends_on()
	{
		return array('\gfksx\thanksforposts\migrations\v_3_0_7');
	}

	public function update_data()
	{
		return array(
			// Version update
			array('config.update', array('thanks_for_posts_version', '3.1.0'))
		);
	}

}
