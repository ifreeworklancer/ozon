<?php

require_once('views/base/header.php');



$sections = ['header-banner' , 'order'];

foreach ($sections as $section) {
	include(__DIR__ . '/views/sections/' . $section . '.php');
}

require_once('views/base/footer.php');