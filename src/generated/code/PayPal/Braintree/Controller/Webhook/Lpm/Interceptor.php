<?php
namespace PayPal\Braintree\Controller\Webhook\Lpm;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Webhook\Lpm
 */
class Interceptor extends \PayPal\Braintree\Controller\Webhook\Lpm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Controller\ResultFactory $resultFactory, \PayPal\Braintree\Model\Webhook\Config $moduleConfig, \Magento\Framework\App\RequestInterface $request, \Psr\Log\LoggerInterface $logger, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory, \Magento\Sales\Model\Service\InvoiceService $invoiceService, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $braintreeAdapter, \Magento\Sales\Model\Order\Email\Sender\InvoiceSender $invoiceSender)
    {
        $this->___init();
        parent::__construct($resultFactory, $moduleConfig, $request, $logger, $orderRepository, $orderCollectionFactory, $invoiceService, $orderManagement, $braintreeAdapter, $invoiceSender);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(): ?\Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
