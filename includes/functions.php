<?php

@include('config.php');

require('git_revision.php');

if (!defined('MODE'))
{
	define('MODE', 'live');
}

function load_stylesheet($path_to_stylesheet, array $opts = array(), $override = false)
{
	global $_SERVER;

	$kv = array();
	foreach ($opts as $key => $value)
	{
		$kv []= "{$key}=\"{$value}\"";
	}

	if (MODE == 'live' || $override)
	{
		echo '<link href="css/'.$path_to_stylesheet.'.min.css" type="text/css" rel="stylesheet" '.implode(" ", $kv).' />' . "\n";
	}
	else
	{
		$uri = 'http://' . $_SERVER['HTTP_HOST'];
		echo '<link rel="stylesheet/less" href="less/'.$path_to_stylesheet.'.less?date='.date('YmdHis').'" type="text/css" />'
			. "\n";
		
		echo "<script type=\"text/javascript\">
				if (typeof localStorage !== 'undefined')
				{
					delete localStorage['{$uri}{$path_to_stylesheet}.less']; 
					delete localStorage['{$uri}{$path_to_stylesheet}.less:timestamp']; 
				}
			</script>";
		echo '<script src="js/less-1.3.0.min.js" type="text/javascript" charset="utf-8"></script>' . "\n";
	}
}

function git_revision()
{
	return GitRevision::format('<a href="http://bitbucket.org/jimmysawczuk/resume/changeset/%r" target="_blank">rev. %r</a> &middot;');
}

