<?php 
/**
* 
*/
class IndexController extends Controller
{
	function __construct(){
		$this->folder = "default";
	}
	
	function index()
	{
		$data = "HELLO";
		$this->render('index', $data);
	}
	
}
?>