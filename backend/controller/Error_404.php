<?php

class Error_404 {

	function index() {
		$data['page_title'] = 'Error 404';
		MLoad::view('error/404', $data);
	}

}
