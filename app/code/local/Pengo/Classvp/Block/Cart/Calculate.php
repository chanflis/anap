<?php 

class Pengo_Classvp_Block_Cart_Calculate extends Mage_Core_Block_Template{
	public function calculateFreeShipping(){
		Mage::log("BLOCK");
		$quote=Mage::getModel('checkout/cart')->getQuote();
		
		if(Mage::getStoreConfig("carriers/freeshipping/free_shipping_subtotal")<=$quote->getGrandTotal()) {
			return true;
		}else{
			return Mage::getStoreConfig("carriers/freeshipping/free_shipping_subtotal")-$quote->getGrandTotal();
		}
		//Mage::log($quote->getData());
	}
}