<?PHP
	
	define("SITE_ROOT", "http://localhost/WSCS%20Tutorials/");
	define("DOC_ROOT", "C:\\xampp1\\htdocs\\WSCS Tutorials\\");

	include DOC_ROOT . 'src\\autoloader.php';

	define("HEADER_HTML", DOC_ROOT . "src/header.html");
	define("FOOTER_HTML", DOC_ROOT . "src/footer.html");

	function outLink($link, $name) {
		echo "<a href=\"$link\" target=\"_blank\">$name</a>";
	}

	function outImg($link, $name) {
		outLink("img/".$link, "<img src=\"img/$link\" alt=\"$name\"></a>");
	}

?>