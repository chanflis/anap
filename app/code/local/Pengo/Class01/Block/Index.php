<?php    
class Pengo_Class01_Block_Index extends Mage_Core_Block_Template
{

    public function getProduct()
    {
        $product = Mage::getModel('catalog/product')->load(995);

        return $product;
    }

    public function getAllCategories()
    {
        $categories = Mage::getModel('catalog/category')
            ->getCollection()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('level', 2)//2 is actually the first level
            ->addAttributeToFilter('is_active', 1);

        return $categories;
    }
}
