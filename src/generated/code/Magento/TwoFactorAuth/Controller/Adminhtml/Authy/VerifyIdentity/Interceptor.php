<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentity;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentity
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Api\TfaProviderSessionInterface $tfaProviderSession)
    {
        $this->___init();
        parent::__construct($context, $session, $pageFactory, $tfa, $tfaProviderSession);
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
