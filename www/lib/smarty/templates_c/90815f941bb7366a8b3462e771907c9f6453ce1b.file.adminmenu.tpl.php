<?php /* Smarty version Smarty-3.0.6, created on 2013-01-19 16:56:47
         compiled from "/data/newznab/www/views/templates/admin/adminmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39008269050fb40cf01b9d8-36980236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90815f941bb7366a8b3462e771907c9f6453ce1b' => 
    array (
      0 => '/data/newznab/www/views/templates/admin/adminmenu.tpl',
      1 => 1295623770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39008269050fb40cf01b9d8-36980236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
 		<h2>Admin Functions</h2> 
		<ul>
		<li><a title="Home" href="<?php echo @WWW_TOP;?>
/../">Home</a></li>
		<li><a title="Admin Home" href="<?php echo @WWW_TOP;?>
/">Admin Home</a></li>
		<li><a title="Edit Site" href="<?php echo @WWW_TOP;?>
/site-edit.php">Edit Site</a></li>
		<li><a href="<?php echo @WWW_TOP;?>
/content-add.php?action=add">Add</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/content-list.php">Edit</a> Content Page</li>
		<li><a href="<?php echo @WWW_TOP;?>
/menu-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/menu-edit.php?action=add">Add</a> Menu Items</li>
		<li><a href="<?php echo @WWW_TOP;?>
/category-list.php?action=add">Edit</a> Categories</li>
		<li><a href="<?php echo @WWW_TOP;?>
/group-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/group-edit.php">Add</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/group-bulk.php">BulkAdd</a> Groups</li>
		<li><a href="<?php echo @WWW_TOP;?>
/regex-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/regex-edit.php?action=add">Add</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/regex-test.php">Test</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/regex-submit.php">Send</a> Regex</li>
		<li><a href="<?php echo @WWW_TOP;?>
/binaryblacklist-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/binaryblacklist-edit.php?action=add">Add</a> Blacklist</li>
		<li><a href="<?php echo @WWW_TOP;?>
/release-list.php">View Releases</a></li>
		<li><a href="<?php echo @WWW_TOP;?>
/rage-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/rage-edit.php?action=add">Add</a> TVRage List</li>
		<li><a href="<?php echo @WWW_TOP;?>
/movie-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/movie-add.php">Add</a> Movie List</li>
		<li><a href="<?php echo @WWW_TOP;?>
/music-list.php">View Music List</a></li>
		<li><a href="<?php echo @WWW_TOP;?>
/console-list.php">View Console List</a></li>
		<li><a href="<?php echo @WWW_TOP;?>
/nzb-import.php">Import</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/nzb-export.php">Export</a> Nzb's</li>
		<li><a href="<?php echo @WWW_TOP;?>
/db-optimise.php">Optimise</a> Tables</li>
		<li><a href="<?php echo @WWW_TOP;?>
/comments-list.php">View Comments</a></li>
		<li><a href="<?php echo @WWW_TOP;?>
/user-list.php">View</a> <a style="padding:0;" href="<?php echo @WWW_TOP;?>
/user-edit.php?action=add">Add</a> Users</li>
		<li><a href="<?php echo @WWW_TOP;?>
/site-stats.php">Site Stats</a></li>
		</ul>