<?PHP
	
	define("SITE_ROOT", "http://localhost/tutorials/");
	define("DOC_ROOT", "/var/www/html/tutorials/");

	include DOC_ROOT . 'src/autoloader.php';

	define("HEADER_HTML", DOC_ROOT . "src/header.html");
	define("FOOTER_HTML", DOC_ROOT . "src/footer.html");

	function outLink($link, $name) {
		echo "<a href=\"$link\" target=\"_blank\">$name</a>";
	}

	function outImg($link, $name) {
		outLink("img/".$link, "<img src=\"img/$link\" alt=\"$name\"></a>");
	}

?>