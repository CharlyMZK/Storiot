<?php
	/*$email = $_POST["email"];
	$password = $_POST["password"];
	
	if(preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {
	    echo $email;
	}
	
	if(preg_match("#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#", $password)) {
	    echo $password;
	}*/
?>
<?php
    class signInController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
        }
        
        function launch(){
            $name = "Connexion";
            $this->response->getContent()->assign('name', $name);
            $this->response->setTemplate("signIn.tpl");
            return $this->response;
        }
     
      
    }
?>
