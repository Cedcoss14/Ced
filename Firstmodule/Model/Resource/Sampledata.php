<?php
namespace Ced\Firstmodule\Model\Resource;
 
use Magento\Framework\Model\Resource\Db\AbstractDb;
 
class Sampledata extends AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('sampletable', 'id');
    }
}