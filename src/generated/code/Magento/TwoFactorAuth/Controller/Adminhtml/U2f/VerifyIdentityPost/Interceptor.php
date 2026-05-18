<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\U2f\VerifyIdentityPost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\VerifyIdentityPost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\VerifyIdentityPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\TwoFactorAuth\Model\Tfa $tfa, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey $u2fKey, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey\Session $u2fSession, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\TwoFactorAuth\Api\TfaProviderSessionInterface $tfaProviderSession)
    {
        $this->___init();
        parent::__construct($context, $tfa, $session, $jsonFactory, $u2fKey, $u2fSession, $dataObjectFactory, $alert, $tfaProviderSession);
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
