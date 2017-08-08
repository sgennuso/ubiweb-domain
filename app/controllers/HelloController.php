<?php

namespace Ubiweb;

use Ubiweb\Controller;

class HelloController extends Controller {

	public function show()
	{
		$data = [
			'name' => $this->args['name'],
			'lang' => $this->args['lang'],
		];

		return $this->view( 'en.index', $data );
	}

}
