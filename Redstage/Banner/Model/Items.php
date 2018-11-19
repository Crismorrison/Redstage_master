<?php
/**
 * Cristian Rajani 2018
 */

namespace Redstage\Banner\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Redstage\Banner\Model\Resource\Items');
    }
}
