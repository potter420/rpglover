<html>
<head>
<title>RPG Lover</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<ul class = "headbar">
<li class = "headbar"><a class="nest1" href="#home" class="Homebtt">RPG LOVER</a></li>
<li class = "headbar"><a class="nest1"href="#list">RPG List</a></li>
<li class = "headbar"><a class="nest1"href="#about">About</a></li>
<li class = "headbar"><a class="nest1"href="#contact">Contact Us!</a></li>
<li class = "headbar">
<div>Search
<ul>
<li><a class="nest2"href="#byname">By name:</a></li>
<li><a class="nest2"href="#bycate">By category:</a></li>
</ul>
</div>
</li>
</ul>
<p class="title" >Some Title Here</p>
<p class="text">Here go something about what we do </p>
<?php
$txt="blue,color of the sky";
echo '<p class="text">'.substr($txt,0,strpos($txt,",")).'</p>';
echo '<p class="text">'.substr($txt,strpos($txt,",")+1).'</p>';

?>
</body>
</html>
