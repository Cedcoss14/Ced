<?php
namespace Ced\Firstmodule\Block\Adminhtml\Mymenu;
 
class Grid extends \Magento\Backend\Block\Widget\Grid\Extended
{

    /**
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    
 
    /**
     * @return $this
     */
    
 
    
    /**
     * @var \Magento\Framework\Module\Manager
     */
    protected $moduleManager;
 
    /**
     * @var \SR\Weblog\Model\BlogPostsFactory
     */
    protected $_blogPostFactory;
 
    /**
     * @var \SR\Weblog\Model\Status
     */
    protected $_status;
 
    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \SR\Weblog\Model\BlogPostsFactory $blogPostFactory
     * @param \SR\Weblog\Model\Status $status
     * @param \Magento\Framework\Module\Manager $moduleManager
     * @param array $data
     *
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(\Magento\Backend\Block\Template\Context $context,\Magento\Backend\Helper\Data $backendHelper,\Magento\Framework\Module\Manager $moduleManager,array $data = []) 
    {
        $this->_modelSampledata = $this->_objectManager;
        $this->moduleManager = $moduleManager;
        parent::__construct($context, $backendHelper, $data);
    }
 
    /**
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setId('id');
        $this->setDefaultSort('id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
        $this->setVarNameFilter('post_filter');
    }
 
    /**
     * @return $this
     */
    protected function _prepareCollection()
    {
        $collection = $this->_modelSampledata->create()->getCollection();
        $this->setCollection($collection);
 
        parent::_prepareCollection();
        return $this;
    }
 
    /**
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareColumns()
    {
        $this->addColumn(
            'id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id'
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
                'class' => 'xxx'
            ]
        );
 
        $this->addColumn(
            'description',
            [
                'header' => __('Description'),
                'index' => 'description'
            ]
        );
 
 
        $this->addColumn(
            'is_active',
            [
                'header' => __('Status'),
                'index' => 'is_active',
            ]
        );
        $this->addColumn(
            'created_at',
            [
                'header' => __('Created At'),
                'index' => 'created_at',
            ]
        );
        $this->addColumn(
            'update_time',
            [
                'header' => __('Updated At'),
                'index' => 'update_time',
            ]
        );
 
 
        $this->addColumn(
            'edit',
            [
                'header' => __('Edit'),
                'type' => 'action',
                'getter' => 'getId',
                'actions' => [
                    [
                        'caption' => __('Edit'),
                        'url' => [
                            'base' => '*/*/edit'
                        ],
                        'field' => 'id'
                    ]
                ],
                'filter' => false,
                'sortable' => false,
                'index' => 'stores',
                'header_css_class' => 'col-action',
                'column_css_class' => 'col-action'
            ]
        );
 
        $block = $this->getLayout()->getBlock('grid.bottom.links');
        if ($block) {
            $this->setChild('grid.bottom.links', $block);
        }
 
        return parent::_prepareColumns();
    }
 
    /**
     * @return $this
     */
    protected function _prepareMassaction()
    {
    }
 
    /**
     * @return string
     */
    public function getGridUrl()
    {
        return $this->getUrl('firstmodule/*/grid', ['_current' => true]);
    }
 
    /**
     * @param \SR\Weblog\Model\BlogPosts|\Magento\Framework\Object $row
     * @return string
     */
    public function getRowUrl($row)
    {
        return $this->getUrl(
            'firstmodule/*/edit',
            ['id' => $row->getId()]
        );
    }
}