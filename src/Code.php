<?PHP
	
	class Code {

		private $examples;
		private $currentCodeExample;

		public function __construct($filePath) {
			$file = File::getFile($filePath);

			$this->examples = explode("EXAMPLE
", $file);

			$this->currentCodeExample = 1;
		}

		public function printNextExample($language) {
			$code = trim($this->examples[$this->currentCodeExample]);

			echo "<pre><code class='$language'>" . $code . "</code></pre>";

			$this->currentCodeExample++;
		}

		public function printExample($language, $number) {
			$code = trim($this->examples[$number]);

			echo "<pre><code class='$language'>" . $code . "</code></pre>";
		}
	}

?>