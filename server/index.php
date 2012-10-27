<?php include_once("seriallogic.php"); ?><!DOCTYPE html>
<html lang="">
<head>
<style type="text/css">

body {
	color: #181818;
	font-family: Helvetica, Verdana, Arial, sans-serif;
}

#main {
	margin: 100px auto 0;
	width: 300px;
	text-align: center;
}
#button {
	width: 240px;
	text-decoration: none;
	overflow: hidden;
	display: block;
	margin: 0px auto 0;
	border: none;
	background-color: #73bde9;
	color: #fefffe;
	padding: 10px 5px;
	cursor: pointer;
	border-bottom: 4px solid #699dc2;
	border-right: 2px solid #699dc2;
	-webkit-border-radius: 999px;
	-moz-border-radius: 999px;
	border-radius: 999px;
	text-transform: none;
	margin-bottom: 20px;
	font: 1.5em 'Oswald', sans-serif;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	
}
#button:hover {
	position: relative;
	top: -2px;
	left: 0px;
	margin-bottom: 23px;
	border-bottom: 6px solid #699dc2;
	border-right: 2px solid #699dc2;

}
#button:active {
	position: relative;
	top: 3px;
	left: 0px;
	margin-bottom: 23px;
	border-bottom: 1px solid #699dc2;
	border-right: 1px solid #699dc2;
}

</style>
  <meta charset="utf-8">
	<title>GPS Gate Opener</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>


	<div id="main">
		
		<a href="?action=press" id="button">Open the gate</a>

	</div>

</body>
</html>