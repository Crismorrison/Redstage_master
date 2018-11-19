<?php
/**
 * Cristian Rajani 2018
 */

namespace Redstage\Banner\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('redstage_banner_items', 'id');
    }
}
