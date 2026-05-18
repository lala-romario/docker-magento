<?php
namespace Magento\Catalog\Model\ProductRenderList;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ProductRenderList
 */
class Interceptor extends \Magento\Catalog\Model\ProductRenderList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor, \Magento\Catalog\Ui\DataProvider\Product\ProductRenderCollectorComposite $productRenderCollectorComposite, \Magento\Catalog\Model\ProductRenderSearchResultsFactory $searchResultFactory, \Magento\Catalog\Model\ProductRenderFactory $productRenderDtoFactory, \Magento\Catalog\Model\Config $config, \Magento\Framework\Data\CollectionModifier $collectionModifier, array $productAttributes)
    {
        $this->___init();
        parent::__construct($collectionFactory, $collectionProcessor, $productRenderCollectorComposite, $searchResultFactory, $productRenderDtoFactory, $config, $collectionModifier, $productAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria, $storeId, $currencyCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getList');
        return $pluginInfo ? $this->___callPlugins('getList', func_get_args(), $pluginInfo) : parent::getList($searchCriteria, $storeId, $currencyCode);
    }
}
