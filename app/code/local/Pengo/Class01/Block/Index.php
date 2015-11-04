<?php    
class Pengo_Class01_Block_Index extends Mage_Core_Block_Template
{

    public function getAllCategories()
    {
        $categories = Mage::getModel('catalog/category')
            ->getCollection()
            ->addAttributeToSelect('*')
            ->addAttributeToFilter('level', 2)//2 is actually the first level
            ->addAttributeToFilter('is_active', 1);

        return $categories;
    }

    public function getProductsByCategory($categoryName)
    {

        $category = Mage::getModel('catalog/category')->loadByAttribute('name',$categoryName);

        if(!$category->getId()){
            return array();
        }

        $productCollection = Mage::getModel('catalog/category')->load($category->getId())
            ->getProductCollection()
            ->addAttributeToSelect('*')
//            ->addAttributeToFilter('price', array('gt' => 100))
            ->setPageSize(3)
        ;

//        $productCollection->getSelect()
//            ->limit(3);

//        $productCollection->getSelect()->order('rand()');


        return $productCollection;
    }

    public function getLatestProducts()
    {
        $latestProducts = Mage::getModel('class01/latestProducts');

        return $latestProducts->getLatestProducts();
    }
}
