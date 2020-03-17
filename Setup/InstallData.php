<?php

namespace Vexpro\Unidade\Setup;

use Vexpro\Unidade\Model\Attribute\Frontend\Unidade as Frontend;
use Vexpro\Unidade\Model\Attribute\Source\Unidade as Source;
use Vexpro\Unidade\Model\Attribute\Backend\Unidade as Backend;
use Magento\Catalog\Model\Product;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Framework\Setup\InstallDataInterface;

class InstallData implements InstallDataInterface
{
    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
    )
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    )
    {
        $eavSetup = $this->eavSetupFactory->create();
        $eavSetup->addAttribute(
            Product::ENTITY,
            'unidade',
            [
                'group'         => 'General',
                'type'          => 'varchar',
                'label'         => 'Unidade',
                'input'         => 'select',
                'source'        => Source::class,
                'frontend'      => Frontend::class,
                'backend'       => Backend::class,
                'required'      => false,
                'sort_order'    => 50,
                'global'        => ScopedAttributeInterface::SCOPE_GLOBAL,
                'is_used_in_grid'           => false,
                'is_visible_in_grid'        => false,
                'is_filterable_in_grid'     => false,
                'visible'                   => true,
                'is_html_allowed_on_front'  => true,
                'visible_on_front'          => true
            ]
        );
    }
}