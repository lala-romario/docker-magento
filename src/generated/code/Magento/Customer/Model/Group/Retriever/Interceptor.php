<?php
namespace Magento\Customer\Model\Group\Retriever;

/**
 * Interceptor class for @see \Magento\Customer\Model\Group\Retriever
 */
class Interceptor extends \Magento\Customer\Model\Group\Retriever implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Session $customerSession)
    {
        $this->___init();
        parent::__construct($customerSession);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo) : parent::getCustomerGroupId();
    }
}
