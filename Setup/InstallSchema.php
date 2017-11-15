<?php
/**
 * A Magento 2 module named Experius/EmailCatcher
 * Copyright (C) 2016 Derrick Heesbeen
 *
 * This file included in Experius/EmailCatcher is licensed under OSL 3.0
 *
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Experius\EmailCatcher\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
 
class InstallSchema implements InstallSchemaInterface
{


    
    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {
        $installer = $setup;
        $installer->startSetup();

        $table_experius_emailcatcher = $setup->getConnection()->newTable($setup->getTable('experius_emailcatcher'));

        $table_experius_emailcatcher->addColumn(
            'emailcatcher_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true,'nullable' => false,'primary' => true,'unsigned' => true,],
            'Entity ID'
        );

        $table_experius_emailcatcher->addColumn(
            'to',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'to'
        );

        $table_experius_emailcatcher->addColumn(
            'from',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'from'
        );

        $table_experius_emailcatcher->addColumn(
            'subject',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'subject'
        );

        $table_experius_emailcatcher->addColumn(
            'body',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            null,
            [],
            'body'
        );

        $table_experius_emailcatcher->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
            null,
            [],
            'created_at'
        );

        $table_experius_emailcatcher->addColumn(
            'store_id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            [],
            'store_id'
        );

        $setup->getConnection()->createTable($table_experius_emailcatcher);

        $setup->endSetup();
    }
}
