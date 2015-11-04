<?php
 
class Pengo_Class01_Model_LatestProducts extends Mage_Core_Model_Abstract
{
    const COLLECTION_SIZE = 5;

    public function getLatestProducts()
    {

        $productCollection = Mage::getModel('catalog/product')->getCollection();
        $productCollection->addAttributeToSelect('*')
            ->setOrder('created_at','DESC');

        $productCollection->getSelect()->limit(self::COLLECTION_SIZE);

        /*foreach($productCollection as $product){
            $product->setPrice(123);
            $product->setName('Producto Prueba');
        }*/

        return $productCollection;
    }

}
	 
