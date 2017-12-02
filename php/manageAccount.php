<?php
    class manageAccountController{
        
        public $publisher;
        public $request;
        public $response;
        
        function __construct($request,$response) {
            $this->request = $request;
            $this->response = $response;
            session_start();
        }
        
        function launch(){
            $user = UserQuery::create()->findOneById($_SESSION['userId']);
           
            if($this->request->action == 'updateInformation'){
                $this->updateUserInformation($user);
                $this->updateSessionUserFirstName($user);
            } else if ($this->request->action == 'updatePassword') {
                $this->updateUserPassword($user);
            } else if ($this->request->action == 'updateAddress') {
                $this->updateUserAddress($user);
            } else if ($this->request->action == 'addPayment') {
                $this->addUserPayment($user);
            } else if($this->request->action == 'deletePayment') {
                $this->deleteUserPayment();
            }
            
            $creditCards = CreditCardQuery::create()->filterByUserId($_SESSION['userId']);
            
            $this->response->getContent()->assign('user', $user);
            $this->response->getContent()->assign('creditCards', $creditCards);
            $this->response->getContent()->assign('name', 'Manage account');
            $this->response->setTemplate('manageAccount.tpl');
            
            return $this->response;
        }
     
        function updateUserInformation($user){
            $email = $_POST['email'];
        	$firstName = $_POST['firstName'];
        	$lastName = $_POST['lastName'];
        	$gender = $_POST['gender'];

        	$user->setEmail($email);
        	$user->setFirstName($firstName);
        	$user->setLastName($lastName);
        	$user->setGender($gender);
        	$user->save();
        } 
        
        function updateSessionUserFirstName($user) {
            $_SESSION['userFirstName'] = $user->getFirstName();
        }
        
        function updateUserPassword($user){
            $password = $_POST['newPassword'];
            
        	$user->setPassword($password);
        	$user->save();
        }
        
        function updateUserAddress($user){
            $address = $_POST['address'];
        	$zipCode = $_POST['zipCode'];
        	$city = $_POST['city'];
        	$phone = $_POST['phone'];

        	$user->setAddress($address);
        	$user->setZipCode($zipCode);
        	$user->setCity($city);
        	$user->setPhone($phone);
        	$user->save();
        } 
        
        function addUserPayment($user) {
            $reference = $_POST['reference'];
        	$expireMonth = $_POST['expireMonth'];
        	$expireYear = $_POST['expireYear'];
        	$holder = $_POST['holder'];

            $creditCard = new CreditCard();
        	$creditCard->setReference($reference);
        	$creditCard->setExpireMonth($expireMonth);
        	$creditCard->setExpireYear($expireYear);
        	$creditCard->setHolder($holder);
        	$creditCard->setUser($user);
        	$creditCard->save();
        }
        
        function deleteUserPayment() {
            $idPayment = $_GET['idPayment'];
            $creditCard = CreditCardQuery::create()->findOneById($idPayment);
            $creditCard->delete();
        }
    }
?>
