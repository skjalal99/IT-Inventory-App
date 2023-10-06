<?php

function linkCSS($cssPath){

    
    $url = SITE_URL . "/" .$cssPath;
    echo '<link rel="stylesheet" href="'. $url .'">';


}

function linkJS($jsPath){

    $url = SITE_URL. "/". $jsPath;
    echo '<script src="'. $url .'"></script>';
}



//========NOTE:==== We can call it later on with $this->helper(link)=========;
//<?php linkCSS("assets/css/bootstrap.min.css"); 
//<?php linkCSS("assets/css/style.css")

?>