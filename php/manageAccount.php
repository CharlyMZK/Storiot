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
            $creditCards = CreditCardQuery::create()->filterByUserId($_SESSION['userId']);
            $orders = $this->getUserConnectedOrders();
            if($this->request->action == 'updateInformation'){
                $this->updateUserInformation($user);
                $this->updateSessionUserFirstName($user);
            } else if ($this->request->action == 'updatePassword') {
                $this->updateUserPassword($user);
            } else if ($this->request->action == 'updateAddress') {
                $this->updateUserAddress($user);
            } else if ($this->request->action == 'sendForm') {
                $this->addUserPayment($user);
            } else if($this->request->action == 'deletePayment') {
                $this->deleteUserPayment();
            }
            
            $this->response->getContent()->assign('user', $user);
            $this->response->getContent()->assign('orders', $orders);
            $this->response->getContent()->assign('creditCards', $creditCards);
            $this->response->setTemplate('manageAccount.tpl');
            
            return $this->response;
        }
        
        function getUserConnectedOrders(){
            return PackageQuery::create()->findByUserId($_SESSION['userId']);
        }
     
        function updateUserInformation($user){
            $email = $_POST['email'];
            $gender = $_POST['gender'];
        	$firstName = $_POST['firstName'];
        	$lastName = $_POST['lastName'];
        	$birthDate = $_POST['birthDate'];

        	$user->setEmail($email);
        	$user->setGender($gender);
        	$user->setFirstName($firstName);
        	$user->setLastName($lastName);
        	$user->setBirthDate(DateTime::createFromFormat('d/m/Y', $birthDate));
        	$user->save();
        } 
        
        function updateSessionUserFirstName($user) {
            $_SESSION['userFirstName'] = $user->getFirstName();
        }
        
        function updateUserPassword($user){
            $password = $_POST['newPassword'];
            $confirmPassword = $_POST['confirmPassword'];
            if($password == $confirmPassword) {
                if($user->getPassword() == $password) {
                    $user->setPassword($password);
            	    $user->save();
                }
            }
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
            $idPayment = $_POST['idPayment'];
            
            $creditCard = CreditCardQuery::create()->findOneById($idPayment);
            $creditCard->delete();
        }
    }
?>
