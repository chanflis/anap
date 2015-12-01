<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute("customer", "profile_image", array(
    "type"    => "varchar",
    "backend" => "",
    "label"   => "Profile Image",
    "input"   => "text",
    "source"  => "",
    "visible" => true,
    "required"=> false,
    "default" => "",
    "frontend"=> "",
    "unique"  => false,
    "note"    => ""
));

$attribute = Mage::getSingleton("eav/config")->getAttribute("customer", "profile_image");


$used_in_forms = array();

$used_in_forms[] = "adminhtml_customer";
//$used_in_forms[]="checkout_register";
$used_in_forms[] = "customer_account_create";
$used_in_forms[] = "customer_account_edit";
$attribute->setData("used_in_forms", $used_in_forms)
        ->setData("is_used_for_customer_segment", true)
        ->setData("is_system", 0)
        ->setData("is_user_defined", 1)
        ->setData("is_visible", 1)
        ->setData("sort_order", 10)
;
$attribute->save();

$installer->endSetup();
