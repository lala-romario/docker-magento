<?php
namespace Magento\Vault\Model\Method\NullPaymentProvider;

/**
 * Interceptor class for @see \Magento\Vault\Model\Method\NullPaymentProvider
 */
class Interceptor extends \Magento\Vault\Model\Method\NullPaymentProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigPaymentAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigPaymentAction');
        return $pluginInfo ? $this->___callPlugins('getConfigPaymentAction', func_get_args(), $pluginInfo) : parent::getConfigPaymentAction();
    }
}
