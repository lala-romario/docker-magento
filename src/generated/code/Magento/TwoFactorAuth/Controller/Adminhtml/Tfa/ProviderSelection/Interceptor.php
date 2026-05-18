<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ProviderSelection;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ProviderSelection
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ProviderSelection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\Backend\Model\Auth\Session $session, \Magento\TwoFactorAuth\Api\TfaProviderSessionInterface $tfaProviderSessionInterface)
    {
        $this->___init();
        parent::__construct($context, $tfa, $session, $tfaProviderSessionInterface);
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
