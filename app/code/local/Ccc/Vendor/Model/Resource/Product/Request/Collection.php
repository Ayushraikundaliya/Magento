<?php
class Ccc_Vendor_Model_Resource_Product_Request_Collection extends Mage_Catalog_Model_Resource_Collection_Abstract
{
	public function _construct() {
        $this->_init('vendor/product_request');
    }
}