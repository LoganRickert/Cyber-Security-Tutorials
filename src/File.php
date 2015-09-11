<?PHP

	class File {

		public static function getFile($path) {
			return file_get_contents($path);
		}

		public static function dumpFile($path, $args = array()) {
			$file = file_get_contents($path);

			foreach($args as $key => $value) {
				if ($key == "previous") {
					if ($value != "") {
						$file = str_replace(
							'{{ ' . $key . ' }}', 
							"<div style=\"float: left\"><a href=\"$value.php\">Previous</a></div>",
							$file
						);
					} else {
						$file = str_replace(
							'{{ ' . $key . ' }}', 
							"",
							$file
						);
					}
				} else if ($key == "next") {
					if ($value != "") {
						$file = str_replace(
							'{{ ' . $key . ' }}', 
							"<div style=\"float: right\"><a href=\"$value.php\">Next</a></div>",
							$file
						);
					} else {
						$file = str_replace(
							'{{ ' . $key . ' }}', 
							"",
							$file
						);
					}
				} else {
					$file = str_replace('{{ ' . $key . ' }}', $value, $file);
				}
			}

			echo $file;
		}

	}

?>