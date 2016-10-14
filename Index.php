<html>
<head>
<title>RPG Lover</title>
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<p class="title" >Some Title Here</p>
<p class="text">Here go something about what we do </p>
<?php
$txt="blue,color of the sky";
echo '<p class="text">'.substr($txt,0,strpos($txt,",")).'</p>';
echo '<p class="text">'.substr($txt,strpos($txt,",")+1).'</p>';

?>
</body>
</html>