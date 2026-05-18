<?php
namespace Magento\CatalogRule\Controller\Adminhtml\Promo\Catalog\MassDeactivate;

/**
 * Interceptor class for @see \Magento\CatalogRule\Controller\Adminhtml\Promo\Catalog\MassDeactivate
 */
class Interceptor extends \Magento\CatalogRule\Controller\Adminhtml\Promo\Catalog\MassDeactivate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\CatalogRule\Api\CatalogRuleRepositoryInterface $ruleRepository)
    {
        $this->___init();
        parent::__construct($context, $ruleRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
