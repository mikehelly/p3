<?php

class Library {
	
	//Properties

	// String
	var $path;

	// Array
	var $books;


	//Methods
	// Encapsulation
	public function get_path() {
		return $this->path;
	}

	public function set_path($new_path) {
		$this->path = $new_path;
	}

	public function get_books() {

		// load the json file
		$books = File::get($this->path);

		// convert the string into a json object
		$books = json_decode($books, true);
	}


}