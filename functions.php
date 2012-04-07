<?php

define('MODE', 'dev');

require('git_revision.php');

function load_stylesheet($path_to_stylesheet)
{
	global $_SERVER;

	if (MODE == 'live')
	{
		echo '<link href="css/'.$path_to_stylesheet.'.min.css" type="text/css" rel="stylesheet" />' . "\n";
	}
	else
	{
		$uri = 'http://' . $_SERVER['HTTP_HOST'];
		echo '<link rel="stylesheet/less" href="less/'.$path_to_stylesheet.'.less?date='.date('YmdHis').'" type="text/css" />'
			. "\n";
		
		$script = "<script type=\"text/javascript\">
				if (typeof localStorage !== 'undefined')
				{
					delete localStorage['{$uri}{$path_to_stylesheet}.less']; 
					delete localStorage['{$uri}{$path_to_stylesheet}.less:timestamp]; 
				}
			</script>";
		echo $script;
		echo '<script src="js/less-1.3.0.min.js" type="text/javascript" charset="utf-8"></script>' . "\n";
	}
}

