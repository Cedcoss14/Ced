<?php
namespace Ced\Firstmodule\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Sampledata extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Ced\Firstmodule\Model\Resource\Sampledata');
    }
}