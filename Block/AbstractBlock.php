<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Redstage\Banner\Block;

/**
 * Class AbstractBlock
 *
 * @package Redstage\Banner\Block
 */
abstract class AbstractBlock extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Framework\Serialize\Serializer\Json
     */
    protected $serializer;

    /**
     * @var \Redstage\Banner\Helper\Data
     */
    protected $helper;

    /**
     * AbstractBlock constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Framework\Serialize\Serializer\Json $serializer
     * @param \Redstage\Banner\Helper\Data $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Serialize\Serializer\Json $serializer,
        \Redstage\Banner\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $data
        );

        $this->serializer = $serializer;
        $this->helper     = $helper;
    }

    /**
     * @return \Magento\Store\Api\Data\StoreInterface
     */
    public function getStore()
    {
        return $this->_storeManager->getStore();
    }
}
