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
			if ($this->currentCodeExample < count($this->examples)) {
				$code = trim($this->examples[$this->currentCodeExample]);

				echo "<pre><code class='$language'>" . $code . "</code></pre>";

				$this->currentCodeExample++;
			} else {
				echo "<pre><code class='$language'>Code example not found!</code></pre>";
			}
		}

		public function printExample($language, $number) {
			if ($number < count($this->examples)) {
				$code = trim($this->examples[$number]);

				echo "<pre><code class='$language'>" . $code . "</code></pre>";
			} else {
				echo "<pre><code class='$language'>Code example not found!</code></pre>";
			}
		}
	}

?>