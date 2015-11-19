<?php
class Pengo_Class06_Model_Observer extends Varien_Event_Observer
{
    const CUSTOMER_GROUP_COMPRADOR = 6;

    
    public function changeGroup()
    {
        $customerModel = Mage::getSingleton('customer/session')->getCustomer();
        $customerModel->setGroupId(self::CUSTOMER_GROUP_COMPRADOR);

        try{
            $customerModel->save();
        } catch(Exception $e){
            Mage::logException($e);
        }
    }
}