<?php
namespace Magento\Payment\Model\Method\Substitution;

/**
 * Interceptor class for @see \Magento\Payment\Model\Method\Substitution
 */
class Interceptor extends \Magento\Payment\Model\Method\Substitution implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Payment\Model\Method\Logger $logger, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Directory\Helper\Data $directory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $scopeConfig, $logger, $resource, $resourceCollection, $data, $directory);
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
