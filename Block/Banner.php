<?php
/**
 * Copyright © 2018 Redstage. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Redstage\Banner\Block;

use Magento\Framework\View\Element\Template;

/**
 * Redstage Banner Page block
 */
class Banner extends AbstractBlock
{
    /**
     * @return string
     *
     *
     */
    public function getContent()
    {
        return $this->helper->getBannerContent($this->getStore()->getCode());
    }

    /**
     * @return array
     */

    public function getConfig()
    {
        return [
            'storage_key' => strtolower($this->getModuleName()) . '_banner',
            'content'     => $this->getContent()

        ];
    }

    /**
     * @return bool|string
     */
    public function getSerializedConfig()
    {
        return $this->serializer->serialize($this->getConfig());
    }


}