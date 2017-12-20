<?php
    class PayController extends DomainController{
        
        function launch(){
            if($this->request->action == 'transaction'){
                if(CartController::isUserConnected()){
                    CartController::createOrderFromCart();
                    
                    $creditCard = $this->getUserCreditCardById($_POST["creditCard"]);
                    $user = UserQuery::create()->findOneById($_SESSION['userId']);
                    $name = 'Payer';
                    
                    $itemsInCart = CartController::getItemsInUserConnectedCart();
                    if($itemsInCart != NULL){
                        $noTaxAmount = CartController::getNoTaxAmount($itemsInCart);
                        $amountWithTax = CartController::getAmountWithTax($itemsInCart);
                        $this->response->getContent()->assign('noTaxAmount', $noTaxAmount);
                        $this->response->getContent()->assign('amountWithTax', $amountWithTax);
                    }
                    CartController::removeItemsInUserCart();
                    $this->response->getContent()->assign('orderId', CartController::getUserConnectedCartId());
                    $this->response->getContent()->assign('date', date("d/m/Y"));
                    $this->response->getContent()->assign('userConnected', $user);
                    $this->response->getContent()->assign('creditCard', $creditCard);
                    $this->response->getContent()->assign('name', $name);
                    $this->response->setTemplate('pay.tpl');
                    
                }else{
                    $this->response->setTemplate('signIn.tpl');         
                }
                
            }else if($this->request->action == 'chooseCreditCard'){
                 if(CartController::isUserConnected()){
                $creditCards = $this->getUserCreditCards();
                $this->response->getContent()->assign('creditCards', $creditCards);
                $this->response->setTemplate('chooseCreditCard.tpl');
                 }else{
                    $this->response->setTemplate('signIn.tpl');         
                }
            }
            return $this->response;
        }
        
        function getUserCreditCardById($id){
            $creditCard = CreditCardQuery::create()->findOneById($id);
            return $creditCard;
        }
        
        function getUserCreditCards(){
            $user = UserQuery::create()->findOneById($_SESSION['userId']);
            $creditCards = $user->getCreditCards();
            return $creditCards;
        }
    }
?>
