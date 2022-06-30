<?php 

    class Kurulus extends Controller {

        function __construct () {

            parent:: libsInclude(array("View"));

			@Session::init();
			
			$this->View->goster("sayfalar/kurulus");
        }
			
		
		
		
    }

?>