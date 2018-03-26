<?php
/**
 * Created by PhpStorm.
 * User: eblangino
 * Date: 26/03/18
 * Time: 10:04
 */
namespace Redstage\Banner\Block\Adminhtml\System\Config;

/**
 * Class Editor
 *
 * @package Redstage\Banner\Block\Adminhtml\System\Config
 */
class Editor extends \Magento\Config\Block\System\Config\Form\Field
{
    /**
     * @var \Magento\Cms\Model\Wysiwyg\Config
     */
    protected $wysiwygConfig;

    /**
     * Editor constructor
     *
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $data
        );

        $this->wysiwygConfig = $wysiwygConfig;
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return string
     */
    protected function _getElementHtml(
        \Magento\Framework\Data\Form\Element\AbstractElement $element
    ) {
        $element->setDataUsingMethod('wysiwyg',true);
        $element->setDataUsingMethod('config', $this->wysiwygConfig->getConfig($element));

        return parent::_getElementHtml($element);
    }
}