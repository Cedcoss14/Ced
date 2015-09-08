<?php
namespace Ced\Firstmodule\Controller\First;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Ced\Firstmodule\Model\Sampledata;
class Myaction extends \Magento\Framework\App\Action\Action
{
    protected $_modelSampledata;
 
    /**
     * @param Context $context
     * @param NewsFactory $modelNewsFactory
     */
    public function __construct(Context $context) 
    {
    	parent::__construct($context);
        
    }
 	public function execute()
    {
    	/*print_r($this->getRequest()->getParams());die;
    	$this->anotherfunc();
      echo "Reached to Controller";die;*/
    	$this->_modelSampledata = $this->_objectManager;
    	//echo get_class($this->_modelSampledata);die;
    	$sampleModel = $this->_modelSampledata->create('Ced\Firstmodule\Model\Sampledata');
 
        // Load the item with ID is 1
        $item = $sampleModel->load(1);
        //print_r($item->getData());die;
 
        // Get news collection
        $newsCollection = $sampleModel->getCollection();
        // Load all data of collection
       // print_r($newsCollection->getData());die;
    	$this->_view->loadLayout();
         $this->_view->renderLayout();
    }
    
    public function anotherfunc()
    {
    	die('i can call this also');
    }
}