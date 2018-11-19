<?php
/**
 * Cristian Rajani 2018
 */

namespace Redstage\Banner\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Redstage\Banner\Model\Items', 'Redstage\Banner\Model\Resource\Items');
    }
	
}
