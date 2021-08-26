<?php


require_once 'init.php';

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/controllers/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/controllers/CalcCredCtrl.class.php';
		$ctrl = new CalcCredCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
            print('hello');
	break;
	case 'action2' :
            print('goodbye');
	break;

}