<?php 

    class Ekstralar extends Controller {

        function __construct () {

			parent:: libsInclude(array("View"));

			@Session::init();
			
			$this->View->goster("sayfalar/ekstralar");
			
			
        }
		
		function index(){
			
			
		}
		
		
		
		
    }

?>