<?php 

    class Diger extends Controller {

        function __construct () {

			parent:: libsInclude(array("View"));

			@Session::init();
			
			$this->View->goster("sayfalar/diger");
			
			
        }
		
		function index(){
			
			
		}
		
		
		
		
    }

?>