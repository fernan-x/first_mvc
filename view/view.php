<?php

class View {

	private $_filename;
	private $_title;

	/*
	 * Constructor
	 */
	public function __construct($action) {
		// Create filename of the view action (ex: 'view/viewAccount.php' for 'Account' action)
		$this->_filename = "view/view" . $action . ".php";
	}

	/*
	 * Generate the view of $this->_filename with $data attributes
	 */
	public function generate($data) {
		// Load the specific part of the view
		$content = $this->load_file($this->_filename, $data);

		// Load the generic part of the view
		$view = $this->load_file('view/core.php', array('title' => $this->_title, 'content' => $content));
		echo $view;
	}

	/*
	 * Load the content of a file with $data attributes
	 * Ex: generate_file('view/head.php', array('title' => 'site title'));
	 */
	private function load_file($file, $data) {
		if (file_exists($file)) {
			// Give accessibility of the data to the view
			extract($data);

			// Output temporisation start
			ob_start();

			// Include file needed
			require $file;

			// Output temporisation stop, it will return the output since ob_start()
			return ob_get_clean();
		}
		else
			throw new Exception("File '$file' not found");
	}

}

?>