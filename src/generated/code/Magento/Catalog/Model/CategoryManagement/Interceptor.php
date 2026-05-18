<?php
namespace Magento\Catalog\Model\CategoryManagement;

/**
 * Interceptor class for @see \Magento\Catalog\Model\CategoryManagement
 */
class Interceptor extends \Magento\Catalog\Model\CategoryManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, \Magento\Catalog\Model\Category\Tree $categoryTree, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoriesFactory)
    {
        $this->___init();
        parent::__construct($categoryRepository, $categoryTree, $categoriesFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getTree($rootCategoryId = null, $depth = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTree');
        return $pluginInfo ? $this->___callPlugins('getTree', func_get_args(), $pluginInfo) : parent::getTree($rootCategoryId, $depth);
    }
}
