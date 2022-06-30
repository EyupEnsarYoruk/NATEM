<?php 

    class Vukuat extends Controller {

        function __construct () {

			parent:: libsInclude(array("View", "Form", "Bilgi"));

			@Session::init();
			
			$this->ModelYukle("iletisim");
			
			
        }
		
		function index(){
			$this->View->goster("sayfalar/vukuat");
			
		}
		
		function bildir(){
			
			//Veritabanı oluşturulunca
			
		}
		
		
		
    }

?>