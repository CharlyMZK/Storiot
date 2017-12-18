<?php
    class HomeController extends DomainController{
        
        function launch() {
            if($this->request->action == 'signOut'){
                $this->signOut();   
            }
            
            $newItems = ItemQuery::create()->find();
            $promotedItems = ItemQuery::create()->find();
            $bestReviewItems = ItemQuery::create()->find();
            
            $this->response->getContent()->assign('newItems', $newItems);
            $this->response->getContent()->assign('promotedItems', $promotedItems);
            $this->response->getContent()->assign('bestReviewItems', $bestReviewItems);
            
            
        	$this->response->getContent()->assign('page', 'home');
            $this->response->getContent()->assign('name', 'Nouveautés');
            $this->response->setTemplate('home.tpl');
            return $this->response;
        }
     
        function signOut() {
            $_SESSION['userId'] = 0;
            $_SESSION['userFirstName'] = '';
        }
      
    }
?>
