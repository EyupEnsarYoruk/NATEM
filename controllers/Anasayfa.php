<?php 

    class Anasayfa extends Controller {

        function __construct () {

            parent:: libsInclude(array("View"));

            @Session::init();
            
            $this->View->goster("sayfalar/index");

        }

        function index () { }

    }

?>