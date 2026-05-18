<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentityPost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentityPost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\VerifyIdentityPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Model\Provider\Engine\Authy $authy, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\User\Model\ResourceModel\User $userResource, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\TwoFactorAuth\Api\TfaProviderSessionInterface $tfaProviderSession)
    {
        $this->___init();
        parent::__construct($context, $session, $jsonFactory, $authy, $tfa, $alert, $dataObjectFactory, $userResource, $scopeConfig, $tfaProviderSession);
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
