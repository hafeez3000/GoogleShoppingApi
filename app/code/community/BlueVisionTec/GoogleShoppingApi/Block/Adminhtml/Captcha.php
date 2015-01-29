<?php
/**
 * @category	BlueVisionTec
 * @package    BlueVisionTec_GoogleShoppingApi
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @copyright   Copyright (c) 2015 BlueVisionTec UG (haftungsbeschränkt) (http://www.bluevisiontec.de)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Adminhtml Google Content Captcha challenge
 *
 * @category	BlueVisionTec
 * @package    BlueVisionTec_GoogleShoppingApi
 * @author      Magento Core Team <core@magentocommerce.com>
 * @author      BlueVisionTec UG (haftungsbeschränkt) <magedev@bluevisiontec.eu>
 */
class BlueVisionTec_GoogleShoppingApi_Block_Adminhtml_Captcha extends Mage_Adminhtml_Block_Template
{

    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('googleshoppingapi/captcha.phtml');
    }

    /**
     * Get HTML code for confirm captcha button
     *
     * @return string
     */
    public function getConfirmButtonHtml()
    {
        $confirmButton = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setData(array(
                'label'     => $this->__('Confirm'),
                'onclick'   => "if($('user_confirm').value != '')
                                {
                                    setLocation('".$this->getUrl('*/*/confirmCaptcha', array('_current'=>true))."' + 'user_confirm/' + $('user_confirm').value + '/');
                                }",
                'class'     => 'task'
            ));
        return $confirmButton->toHtml();
    }
}
