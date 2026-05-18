<?php
namespace Magento\LoginAsCustomerFrontendUi\Controller\Login\Index;

/**
 * Interceptor class for @see \Magento\LoginAsCustomerFrontendUi\Controller\Login\Index
 */
class Interceptor extends \Magento\LoginAsCustomerFrontendUi\Controller\Login\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Framework\App\RequestInterface $request, \Magento\LoginAsCustomerApi\Api\AuthenticateCustomerBySecretInterface $authenticateCustomerBySecret, \Magento\Framework\Message\ManagerInterface $messageManager, \Psr\Log\LoggerInterface $logger, ?\Magento\Customer\Model\Session $customerSession = null, ?\Magento\Checkout\Model\Session $checkoutSession = null)
    {
        $this->___init();
        parent::__construct($resultFactory, $request, $authenticateCustomerBySecret, $messageManager, $logger, $customerSession, $checkoutSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(): \Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
