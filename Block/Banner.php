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
class Banner extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    /**
     * Banner function
     *
     * @return string
     */
    public function getBanner()
    {
        return 'This is a banner function for some logic...';
    }
}