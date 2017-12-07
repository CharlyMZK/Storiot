<?php
	/*$email = $_POST['email'];
	$password = $_POST['password'];
	
	if(preg_match('#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#', $email)) {
	    echo $email;
	}
	
	if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password)) {
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
            session_start();
        }
        
        function launch(){
            if($this->request->action == 'sendForm') {
                if($this->testConnection()) {
                    $this->response->setTemplate('home.tpl');
                } else {
                    $this->response->getContent()->assign('errorMessage', 'L\'adresse email ou le mot de passe est incorrect');
                    $this->response->setTemplate('signIn.tpl');  
                }
            } else {
                $this->response->setTemplate('signIn.tpl');                
            }
            
            return $this->response;
        }
        
        function testConnection(){
            $result = false;
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = UserQuery::create()->findOneByEmail($email);
            
            if($user && $user->getPassword() === $password){
                $this->createSession($user);
                $result = true;
            } else {
               $this->response->getContent()->assign('email', $email); 
            }
            
            return $result;
        }
        
        function createSession($user){
            $_SESSION['userId'] = $user->getId();
            $_SESSION['userFirstName'] = $user->getFirstName();
        }
    }
?>