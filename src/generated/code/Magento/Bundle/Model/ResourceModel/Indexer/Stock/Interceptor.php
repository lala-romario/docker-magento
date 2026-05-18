<?php
namespace Magento\Bundle\Model\ResourceModel\Indexer\Stock;

/**
 * Interceptor class for @see \Magento\Bundle\Model\ResourceModel\Indexer\Stock
 */
class Interceptor extends \Magento\Bundle\Model\ResourceModel\Indexer\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\Indexer\Table\StrategyInterface $tableStrategy, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\ResourceModel\Indexer\ActiveTableSwitcher $activeTableSwitcher, \Magento\Bundle\Model\ResourceModel\Indexer\StockStatusSelectBuilder $stockStatusSelectBuilder, \Magento\Bundle\Model\ResourceModel\Indexer\BundleOptionStockDataSelectBuilder $bundleOptionStockDataSelectBuilder, \Magento\Bundle\Model\ResourceModel\Indexer\OptionQtyExpressionProvider $optionQtyExpressionProvider, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $tableStrategy, $eavConfig, $scopeConfig, $activeTableSwitcher, $stockStatusSelectBuilder, $bundleOptionStockDataSelectBuilder, $optionQtyExpressionProvider, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexEntity($entityIds)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexEntity');
        return $pluginInfo ? $this->___callPlugins('reindexEntity', func_get_args(), $pluginInfo) : parent::reindexEntity($entityIds);
    }
}
