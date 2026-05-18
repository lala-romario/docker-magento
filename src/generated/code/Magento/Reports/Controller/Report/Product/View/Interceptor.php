<?php
namespace Magento\Reports\Controller\Report\Product\View;

/**
 * Interceptor class for @see \Magento\Reports\Controller\Report\Product\View
 */
class Interceptor extends \Magento\Reports\Controller\Report\Product\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Reports\Model\ReportStatus $reportStatus, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Visitor $customerVisitor, \Magento\Reports\Model\Product\Index\ViewedFactory $productIndexFactory, \Magento\Reports\Observer\EventSaver $eventSaver)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $reportStatus, $storeManager, $customerSession, $customerVisitor, $productIndexFactory, $eventSaver);
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
