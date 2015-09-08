<?php
   
     
    namespace Ced\Firstmodule\Setup;
     
    use Magento\Framework\Setup\UpgradeDataInterface;
    use Magento\Framework\Setup\ModuleDataSetupInterface;
    use Magento\Framework\Setup\ModuleContextInterface;
     
    class UpgradeData implements UpgradeDataInterface
    {
        public function upgrade(ModuleDataSetupInterface $setup,ModuleContextInterface $context) 
        {
            $setup->startSetup();
     
            if (version_compare($context->getVersion(), '0.1.1') < 0) {
                // Get tutorial_simplenews table
                $tableName = $setup->getTable('sampletable');
                // Check if the table already exists
                if ($setup->getConnection()->isTableExists($tableName) == true) {
                    // Declare data
                    $data = [
                        [
                            'name' => 'Name1',
                            'description' => 'The description1',
                            'is_active' => 1,
                        	'created_at' => date('Y-m-d H:i:s'),
                        	'update_time' => date('Y-m-d H:i:s'),
                        ],
                        [
                            'name' => 'Name2',
                            'description' => 'The description2',
                            'is_active' => 1,
                        	'created_at' => date('Y-m-d H:i:s'),
                        	'update_time' => date('Y-m-d H:i:s'),
                        ]
                    ];
     
                    // Insert data to table
                    foreach ($data as $item) {
                        $setup->getConnection()->insert($tableName, $item);
                    }
                }
            }
     
            $setup->endSetup();
        }
    }