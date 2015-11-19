<?php 
class Pengo_Classvp_Model_Cart_Observer{
	public function calculateTotal($observer){
		//Mage::log($observer->getData());
		// $action = $observer->getEvent()->getAction();
		// Mage::log($action->getRequest()->getRequestedActionName());
		// Mage::log(get_class($action));
		// if ($action instanceof Mage_Checkout_CartController&& $action->getRequest()->getRequestedActionName()=="index"){
		// 	Mage::log("hi");
		// }
	}

}