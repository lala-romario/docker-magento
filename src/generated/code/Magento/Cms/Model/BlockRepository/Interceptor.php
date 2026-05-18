<?php
namespace Magento\Cms\Model\BlockRepository;

/**
 * Interceptor class for @see \Magento\Cms\Model\BlockRepository
 */
class Interceptor extends \Magento\Cms\Model\BlockRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Cms\Model\ResourceModel\Block $resource, \Magento\Cms\Model\BlockFactory $blockFactory, \Magento\Cms\Api\Data\BlockInterfaceFactory $dataBlockFactory, \Magento\Cms\Model\ResourceModel\Block\CollectionFactory $blockCollectionFactory, \Magento\Cms\Api\Data\BlockSearchResultsInterfaceFactory $searchResultsFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Store\Model\StoreManagerInterface $storeManager, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null, ?\Magento\Framework\EntityManager\HydratorInterface $hydrator = null)
    {
        $this->___init();
        parent::__construct($resource, $blockFactory, $dataBlockFactory, $blockCollectionFactory, $searchResultsFactory, $dataObjectHelper, $dataObjectProcessor, $storeManager, $collectionProcessor, $hydrator);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Cms\Api\Data\BlockInterface $block)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($block);
    }
}
