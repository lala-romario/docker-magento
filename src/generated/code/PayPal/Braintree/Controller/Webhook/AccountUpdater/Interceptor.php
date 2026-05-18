<?php
namespace PayPal\Braintree\Controller\Webhook\AccountUpdater;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Webhook\AccountUpdater
 */
class Interceptor extends \PayPal\Braintree\Controller\Webhook\AccountUpdater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \PayPal\Braintree\Model\Webhook\Config $moduleConfig, \Magento\Framework\App\RequestInterface $request, \Psr\Log\LoggerInterface $logger, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $bta, \Magento\Framework\App\Filesystem\DirectoryList $directoryList, \Magento\Framework\Filesystem\Driver\File $fileDriver)
    {
        $this->___init();
        parent::__construct($resultFactory, $moduleConfig, $request, $logger, $bta, $directoryList, $fileDriver);
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
