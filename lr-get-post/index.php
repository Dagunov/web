<?php

$available = ['infopage', 'index-page', 'container', 'form'];

$lg = $_POST['lg']??0;
$pw = $_POST['pw']??0;

if($lg !== 0 && $pw !== 0){
	echo "<p>You tried to login as $lg with $pw as your password.</p>";
}

require('header.php');

$page = $_GET['page']??0;
if($page === 0 || !in_array($page, $available)){
	require('index-page.php');
} else {
	require($page . '.php');
}
require('footer.php');

?>