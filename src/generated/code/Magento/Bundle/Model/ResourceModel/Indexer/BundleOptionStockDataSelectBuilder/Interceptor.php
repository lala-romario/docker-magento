<?php
namespace Magento\Bundle\Model\ResourceModel\Indexer\BundleOptionStockDataSelectBuilder;

/**
 * Interceptor class for @see \Magento\Bundle\Model\ResourceModel\Indexer\BundleOptionStockDataSelectBuilder
 */
class Interceptor extends \Magento\Bundle\Model\ResourceModel\Indexer\BundleOptionStockDataSelectBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($resourceConnection, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function buildSelect($idxTable)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildSelect');
        return $pluginInfo ? $this->___callPlugins('buildSelect', func_get_args(), $pluginInfo) : parent::buildSelect($idxTable);
    }
}
