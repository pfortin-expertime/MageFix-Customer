<?php

namespace MageFix\Customer\Block\Adminhtml\Edit\Tab;

/**
 * Obtain all carts contents for specified client
 */
class Carts extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Carts 
{
    
    /**
     * @return bool
     */
    public function canShowTab()
    {
        if ($this->_getCustomer()->getId()) {
            return true;
        }
        return false;
    }
	
    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabLabel()
    {
        return __('Shopping cart');
    }

    /**
     * @return \Magento\Framework\Phrase
     */
    public function getTabTitle()
    {
        return __('Shopping cart');
    }
    
    /**
     * Return URL link to Tab content, used with isAjaxLoaded to true
     *
     * @return string
     */
    public function getTabUrl()
    {
        return $this->getUrl('customer/*/cart', ['_current' => true]);
    }
	
    /**
     * Tab should be loaded trough Ajax call
     *
     * @return bool
     */
    public function isAjaxLoaded()
    {
        return false;
    }
    
    /**
     * @return bool
     */
    public function canDisplayContainer()
    {
        return true;
    }
}
