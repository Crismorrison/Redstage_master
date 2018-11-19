<?php
/**
 * Cristian Rajani 2018
 */

namespace Redstage\Banner\Controller\Adminhtml\Items;

class NewAction extends \Redstage\Banner\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
