<?php
    class ContactController extends DomainController{
        
        function launch(){
            if($this->request->action == 'sendForm') { 
                $this->createContact();
                $this->response->setTemplate('home.tpl');
            } else {
                $this->response->setTemplate('contact.tpl');
            }
            return $this->response;
        }
     
        function createContact(){
            // Récupération des données
            $email = $_POST['email'];
            $category = $_POST['category'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
        	
        	// Mise des données dans l'objet à inserer dans la base
        	$contact = new Contact();
        	$contact->setEmail($email);
        	$contact->setCategory($category);
        	$contact->setSubject($subject);
        	$contact->setMessage($message);
        	$contact->setSendingDate(date_default_timezone_get('France/Paris'));
        	$contact->save();
        }
    }
?>
