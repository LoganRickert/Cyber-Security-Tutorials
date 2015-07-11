<?PHP
	
	class File {

		public function getFile($path) {
			return file_get_contents($path);
		}

		public function dumpFile($path, $args = array()) {
			$file = file_get_contents($path);

			foreach($args as $key => $value) {
				$file = str_replace('{{ ' . $key . ' }}', $value, $file);
			}

			echo $file;
		}

	}

?>