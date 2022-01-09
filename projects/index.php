<?php

include("../getdir.php");

$dir_list=scandir($dir);	
//print_r($dir_list);
$_xamppdir=array(".","..","applications.html","bitnami.css","dashboard","favicon.ico","img","index.php","projects.php","webalizer","xampp","iconfolder.png","getdir.php","projects");


$project=array();
//print_r($_xamppdir);
foreach($dir_list as $list)
{
	
	if(in_array($list,$_xamppdir))
	{
		//echo "<span style='color:blue;'>found</span>";
		continue;
		
	}
	else
	{
		//echo "<span style='color:red;'>not found</span>|";
		//echo "<br/>";
		//echo $list;
		array_push($project,$list);
	}
}
 
 //print_r($project);
?>
<!Doctype html>
<html lang="Us-en">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo __DIR__?></title>
		<style>
		*{
			margin:0;
			padding:0;
		}
		body
		{
			background-color:lightgray;
		}
		#outer
		{
			height:590px;
			width:800px;
			background-color:white;
			margin:2px auto;
			border-radius:5px;
			box-shadow:0px 0px 10px gray;
			border:1px solid transparent;
		}
		#header
		{
			width:798px;
			background-color:darkblue;
			border:1px solid black;
			height:100px;
			margin-top:0px;
			border-radius:5px 5px 0px 0px;
		}
		#section
		{
			height:auto;
			border:1px solid transparent;
			width:99%;
			margin:0px auto;
			background-color: cornsilk;
			color:gray;
			font-family:verdana;
			font-size:0.8rem;
			font-style:bold;
			cursor:pointer;
		}
		/*
		details summary::-webkit-details-marker {
		background: url('add.png') center no-repeat;
		color: transparent;
		height:25px;
		width:25px;
		border-radius:50%;
		background-size:25px 25px;
}
*/
		</style>
	</head>
	<body>
		<div id="outer">
			<header>
				<div id="header">
					<center>
					<br/>
					<span style="color:white;font-size:1.0rem;font-family:rockwell;">Xampp Directory |</span><span style="color:lightblue;font-size:1.0rem;font-family:rockwell;"><a href="../index.php"style="text-decoration:none;color:skyblue;">Goto DashBoard</a></span>
					<hr noshade color="white" />
					<p style="text-align:justify;font-size:0.8rem;color:white;text">
					This Xampp Directory is Open Project.php File where it scans all the Important  Files and Donot Include its Listing Rest Shows Your Added Projects as a Project.
					</p>
					</center>
				</div>
			</header>
			<section style="font-family:rockwell;">
			<span style="padding-right:0px;font-size:0.9rem;padding-top:10px;">Xampp Community provides the local server support to php developers & artisan.
			
			</span>
			<a href="../phpmyadmin" style="text-decoration:none;">
			<img src="db.png" style="height:45px;width:45px;display:inline-block;margin-left:540px;"/>
			<span style="color:orange;position:relative;top:-13px;">PHPMyadmin</span>
			</a>
			<br/>
				<div id="section">
				<span style="font-family:rockwell;color:black;font-size:1.2rem;">My-projects</span>
				<details>
					<summary style="border:1px solid transparent;background-color:black;padding:5px;color:white;">
					 Click on [--Project--Tab--] 
					</summary>
						<div style="margin-left:20px;border-left:2px solid black;height:auto;">
					<?php 
					
					foreach($project as $pro)
					{
						echo "_"."<a href='../$pro/' style='text-decoration:none;font-weight:bold;'><img src='iconfolder.png' style='height:25px;width:25px;position:relative;top:7px;'> ".$pro."</a>";
						echo "<br/>";
					}
					?>
						</div>
				</details>
				</div>
			</section>
		</div>
	</body>
</html>

