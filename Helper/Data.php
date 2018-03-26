<?php
/**
 * Copyright © 2018 Redstage. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Redstage\Banner\Helper;

/**
 * Redstage Banner Training
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * Path to store config if extension is enabled
     *
     * @var string
     */
    const XML_PATH_BANNER_ENABLED = 'redstage_banner/banner/enabled';
    const XML_PATH_BANNER_CONTENT = 'redstage_banner/banner/content';

    /**
     * Check if extension enabled
     *
     * @return string|null
     */
    public function isBannerEnabled()
    {
        return $this->scopeConfig->isSetFlag(
            self::XML_PATH_BANNER_ENABLED,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
    /**
     * @param null|string $store
     * @return string
     */
    public function getBannerContent($store = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_BANNER_CONTENT,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $store
        );
    }
}