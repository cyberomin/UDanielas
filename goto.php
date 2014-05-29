<?php
$dir = scandir("./");
if (isset($_GET['page']))
{
	$page = strtolower($_GET['page']);
	$page = $page.".php";
	if (in_array($page,$dir))
	{
		require_once($page);
	}
	else if($_GET['page'] == "Home")
	{
		require_once("index.php");
	}
	else
	{
		require_once("404.php");
	}
}
else
{
	require_once("index.php");
}
?>