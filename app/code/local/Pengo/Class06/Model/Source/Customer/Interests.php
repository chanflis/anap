<?php
class Pengo_Class06_Model_Source_Customer_Interests extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = array();
            $this->_options[] = array(
                    'value' => '',
                    'label' => 'Elegir opción'
            );
            $this->_options[] = array(
                    'value' => 1,
                    'label' => 'Deportes'
            );
            $this->_options[] = array(
                    'value' => 2,
                    'label' => 'Noticias'
            );
            $this->_options[] = array(
                    'value' => 3,
                    'label' => 'Cultura'
            );
            $this->_options[] = array(
                    'value' => 4,
                    'label' => 'Política'
            );
            $this->_options[] = array(
                    'value' => 5,
                    'label' => 'Moda'
            );
        }
 
        return $this->_options;
    }

    public function toOptionArray()
    {
        $options = $this->getAllOptions();
        $optionsArray = array();

        foreach($options as $option){
            $optionsArray[] = $option['label'];
        }

        return $optionsArray;
    }
}