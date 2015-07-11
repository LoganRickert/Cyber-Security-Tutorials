<?PHP
	
	class Wiki {

		public function link($lookup) {
			$json = json_decode(file_get_contents(DOC_ROOT . "src/links.json"), true);

			if (array_key_exists($lookup, $json)) {
				echo "<a href=\"$json[$lookup]\" class=\"wiki-link-good\" target=\"_blank\">$lookup</a>";
			} else {
				echo "<a href=\"#\" class=\"wiki-link-bad\">$lookup</a>";
			}
		}

	}

?>