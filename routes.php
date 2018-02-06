<?php
	function call($controller, $action){
		//require the file that matches the controller name
		require_once('controllers/'.$controller.'_controller.php');

		//create a new instance of the needed controller
		switch ($controller) {
			case 'pages':
				$controller = new PagesController();
				break; 
		}

		//call the action
		$controller->{ $action}();
	}

	//	creating list of controllers
	$controllers = array('pages' => ['home', 'error']);

	// check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
 ?>