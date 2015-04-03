<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2010 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

// Module general information
$module_title = "uptime";
$module_version = "0.1";
$db_version = 1;
$module_required = FALSE;
$module_menus = array(
    array( 'subpage' => 'uptime_user', 'name'=>'Uptime', 'group'=>'user' ),
	array( 'subpage' => 'iptime_admin', 'name'=>'Uptime', 'group'=>'admin' )
);

$install_queries = array();
$install_queries[0] = array(
	"DROP TABLE IF EXISTS `".OGP_DB_PREFIX."uptime`;",
    "CREATE TABLE IF NOT EXISTS `".OGP_DB_PREFIX."uptime` (
	`uptime_id` int(11) NOT NULL auto_increment,
	`home_cfg_id` int(11) NOT NULL,
	`uptime` int(2) NOT NULL,
	`force_shutdown` TINYINT(1) NOT NULL,
	PRIMARY KEY  (`uptime_id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=UTF8;",
);

?>
