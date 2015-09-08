<?php
namespace Ced\Firstmodule\Controller\Adminhtml\Mymenu;
 
class Index extends \Magento\Backend\App\Action
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
    	/*$this->_view->loadLayout();
         $this->_view->renderLayout();*/
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Ced_Firstmodule::mymenu');
        $resultPage->addBreadcrumb(__('CMS'), __('CMS'));
        $resultPage->addBreadcrumb(__('Manage Grid View'), __('Manage Grid View'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Grid'));
 
        return $resultPage;
    }
}