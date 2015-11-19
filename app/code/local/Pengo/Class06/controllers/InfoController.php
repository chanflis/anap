<?php
class Pengo_Class06_InfoController extends Mage_Core_Controller_Front_Action{

    public function IndexAction() {

        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle($this->__('Información Extra'));
        $this->renderLayout();
    }

    public function saveAction()
    {
        if($data = $this->getRequest()->getParams()){

            $customerModel = Mage::getSingleton('customer/session')->getCustomer();

            $customerModel->setRfc($data['rfc']);
            $customerModel->setProfileImage($data['profile_image']);

            try{
                $customerModel->save();
            } catch (Exception $e){
                Mage::logException($e);
                $this->_redirect('*/*/index');
            }

        }

        $this->_redirect('*/*/index');
    }
}