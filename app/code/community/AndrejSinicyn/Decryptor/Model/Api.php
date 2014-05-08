<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    AndrejSinicyn
 * @package     AndrejSinicyn_CatalogTuner
 * @copyright   Copyright (c) 2012-2014 Andrej Sinicyn
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
?>
<?php
class AndrejSinicyn_Decryptor_Model_Api extends Mage_Api_Model_Resource_Abstract
{
    public function decrypt($data)
    {
        if ($data) {
            return Mage::helper('core')->decrypt($data);
        }
        return $data;
    }
}
