<?php
namespace Ced\Firstmodule\Model\Resource\Sampledata;
 
use Magento\Framework\Model\Resource\Db\Collection\AbstractCollection;
 
class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Ced\Firstmodule\Model\Sampledata',
            'Ced\Firstmodule\Model\Resource\Sampledata'
        );
    }
}