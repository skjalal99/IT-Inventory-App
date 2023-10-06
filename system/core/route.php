<?php

class Route {
   
    // Default controller, method, params

    public $controller = "Home";
    public $method     = "index";
    public $params     = [];

    public function __construct()
    {
        $url = $this->url();
        if(!empty($url)){
            if(file_exists("../application/controllers/" . ucfirst($url[0]) . "Controller.php")){
                    $this->controller = $url[0];
                   
                    unset($url[0]);
            } else {
                echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry  ".$url[0].".php not found</div>";
            }
        }
        
        // Include controller
        $this->controller .='Controller'; // Concatinate Controller name 

       require_once "../application/controllers/" . $this->controller . ".php";
        // Instantiate controller
        $this->controller = new $this->controller;


         // Calling Method
        if(isset($url[1]) && !empty($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);

            } else {
                echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry  method ".$url[1]." not found</div>";
                // $filename = "../application/controllers/_404.php";
                // require $filename;
                // $this->controller = "_404";
            }
        }

        if(isset($url)){
            $this->params = $url;
        } else {
            $this->params = [];
        }

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function url(){
        if(isset($_GET['url'])){
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            print_r($url);
            return $url;
        }
    }

}

?>