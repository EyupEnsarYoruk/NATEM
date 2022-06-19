<?php
 
    class Route {

        protected $varsayilanController, $varsayilanMethod, $controller, $method, $parameters = [];

        function __construct () {

            include 'config/router.php';

            $this->varsayilanController = $route["kontrolcu"];

            $this->varsayilanMethod = $route["method"];

            $this->parseURL();

            if(file_exists(CONTROLLER.$this->controller.'.php')):

                require_once(CONTROLLER.$this->controller.'.php');

                $this->controller = new $this->controller;

                if(method_exists($this->controller, $this->method)):

                    if($this->method=="detay" || $this->method=="kategori"):
                        
                        if(count($this->parameters)<2):

                            header("Location: ".URL);
                        
                        else:

                            call_user_func_array([$this->controller, $this->method], $this->parameters);	

                        endif;
                    
                    else:

                        call_user_func_array([$this->controller, $this->method], $this->parameters);

                    endif;

                else:

                    // $this->defaultYukle();

                    null;

                endif;

            else:

                $this->defaultYukle();

            endif;

        }

        function ParseURL () {

            $url = isset($_GET["url"]) ? $_GET["url"]: null;		
            
            $url = rtrim($url, '/');		

            if (!empty($url)) :

                $url = explode('/', $url);

                $this->controller = isset($url[0]) ? $url[0] : $this->varsayilanController;
            
                $this->method = isset($url[1]) ? $url[1] : $this->varsayilanMethod;
            
                unset($url[0], $url[1]);		

                $this->parameters = !empty($url) ? array_values($url) : array();

            else:
              
                $this->controller =  $this->varsayilanController;
              
                $this->method = $this->varsayilanMethod;
               
                $this->parameters = [];
                
            endif;

        }

        protected function defaultYukle () {
	
            require_once(CONTROLLER.$this->varsayilanController.'.php');
            
            $this->varsayilanController = new $this->varsayilanController;	
            
            // call_user_func_array(["", ""], $this->parameters);	
            
        }

    }

?>