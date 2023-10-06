<?php 


Trait MyController
{
    public function template($name)
	{
		$filename = "../application/templates/".$name.".php";
		if(file_exists($filename))
		{
            echo $filename;
			require_once $filename;
		}else{

			$filename = "../application/views/404.view.php";
			require $filename;
		}
	}

	public function view($name,$header='header',$footer='footer',$data = [])
	{
		 $filename = "../application/views/".$name."view.php";
		 $headerfile = "../application/templates/login/".$header.".php";
		 $footerfile = "../application/templates/login/".$footer.".php";
		if(file_exists($filename))
		{
             //$filename;
			require_once $headerfile;
			require_once $filename;
			require_once $footerfile;
			
		}else{

			$filename = "../application/views/404.view.php";
			require $filename;
		}
	}
    public function model($Name){

		$modelName = "../application/models/".$Name."model.php";

        if(file_exists($modelName)){
  
          require_once "$modelName";
          return new $modelName;
  
        } else {
          echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry $Name Model.php file not found </div>";
        }
  
     }

// ================================================================================

	 public function input($inputName){

		if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == 'post'){
  
		   return trim(strip_tags($_POST[$inputName]));
  
		} else if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get'){
  
		   return trim(strip_tags($_GET[$inputName]));
  
		}
  
	 }
  
	 public function helper($helperName){
  
		if(file_exists("../system/helpers/".$helperName.".php")){
  
		   require_once "../system/helpers/".$helperName.".php";
  
		} else {
		   echo "<div style='margin:0;padding: 10px;background-color:silver;'>Sorry helper $helperName file not found </div>";
		}
  
	 }
  
	 // Set session
	 public function setSession($sessionName, $sessionValue){
  
  
		 if(!empty($sessionName) && !empty($sessionValue)){
			$_SESSION[$sessionName] = $sessionValue;
		 }
  
	 }
  
	 // Get session
	 public function getSession($sessionName){
  
	   if(!empty($sessionName)){
		  return $_SESSION[$sessionName];
	   }
  
	 }
  
	 // Unset session
	 public function unsetSession($sessionName){
  
		if(!empty($sessionName)){
		   
		   unset($_SESSION[$sessionName]);
  
		}
  
	 }
  
	 // Destroy whole sessions
	 public function destroy(){
  
		session_destroy();
  
	 }
  
  
	 // Set flash message
	 public function setFlash($sessionName, $msg){
  
		if(!empty($sessionName) && !empty($msg)){
  
		   $_SESSION[$sessionName] = $msg;
  
		}
  
	 }
  
	 //Show flash message
	 public function flash($sessionName, $className){
  
		if(!empty($sessionName) && !empty($className) && isset($_SESSION[$sessionName])){
		   
		   $msg = $_SESSION[$sessionName];
		   
		   echo "<div class='". $className ."'>".$msg."</div>";
		   unset($_SESSION[$sessionName]);
  
		}
  
	 }
  
	 public function redirect($path){
  
	 header("location:" . SITE_URL . "/".$path);
  
	 }





}// class mycontroller ends