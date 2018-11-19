<?php
/**
 * Cristian Rajani 2018
 */

namespace Redstage\Banner\Controller\Adminhtml\Items;

class Index extends \Redstage\Banner\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Redstage_Banner::banner');
        $resultPage->getConfig()->getTitle()->prepend(__('Redstage Banners'));
        $resultPage->addBreadcrumb(__('Redstage'), __('Redstage'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
