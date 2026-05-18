<?php
namespace PayPal\Braintree\Controller\Shipping\Callback;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Shipping\Callback
 */
class Interceptor extends \PayPal\Braintree\Controller\Shipping\Callback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \PayPal\Braintree\Api\ShippingCallbackServiceInterface $shippingCallbackService, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($request, $jsonFactory, $shippingCallbackService, $logger);
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
