<?php
namespace Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync
 */
class Interceptor extends \Magento\InventoryIndexer\Indexer\Stock\Strategy\Sync implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryIndexer\Indexer\Stock\GetAllStockIds $getAllStockIds, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexStructureInterface $indexStructure, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexNameBuilder $indexNameBuilder, \Magento\InventoryMultiDimensionalIndexerApi\Model\IndexTableSwitcherInterface $indexTableSwitcher, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryIndexer\Indexer\SourceItem\SkuListInStockFactory $skuListInStockFactory, \Magento\InventoryIndexer\Indexer\Stock\IndexDataFiller $indexDataFiller)
    {
        $this->___init();
        parent::__construct($getAllStockIds, $indexStructure, $indexNameBuilder, $indexTableSwitcher, $defaultStockProvider, $skuListInStockFactory, $indexDataFiller);
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $stockIds): void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($stockIds);
    }
}
