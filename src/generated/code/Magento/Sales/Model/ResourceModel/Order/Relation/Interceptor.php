<?php
namespace Magento\Sales\Model\ResourceModel\Order\Relation;

/**
 * Interceptor class for @see \Magento\Sales\Model\ResourceModel\Order\Relation
 */
class Interceptor extends \Magento\Sales\Model\ResourceModel\Order\Relation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\ResourceModel\Order\Handler\Address $addressHandler, \Magento\Sales\Api\OrderItemRepositoryInterface $orderItemRepository, \Magento\Sales\Model\ResourceModel\Order\Payment $orderPaymentResource, \Magento\Sales\Model\ResourceModel\Order\Status\History $orderStatusHistoryResource)
    {
        $this->___init();
        parent::__construct($addressHandler, $orderItemRepository, $orderPaymentResource, $orderStatusHistoryResource);
    }

    /**
     * {@inheritdoc}
     */
    public function processRelation(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processRelation');
        return $pluginInfo ? $this->___callPlugins('processRelation', func_get_args(), $pluginInfo) : parent::processRelation($object);
    }
}
