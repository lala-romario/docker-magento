<?php
namespace Magento\InventorySales\Model\GetSalableQty;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetSalableQty
 */
class Interceptor extends \Magento\InventorySales\Model\GetSalableQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryConfigurationApi\Api\GetStockItemConfigurationInterface $getStockItemConfiguration, \Magento\InventoryReservationsApi\Model\GetReservationsQuantityInterface $getReservationsQuantity, \Magento\InventorySalesApi\Model\GetProductAvailableQtyInterface $getProductAvailableQty)
    {
        $this->___init();
        parent::__construct($getStockItemConfiguration, $getReservationsQuantity, $getProductAvailableQty);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
