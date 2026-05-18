<?php
namespace Magento\Catalog\Model\Product\Price\SpecialPriceStorage;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Price\SpecialPriceStorage
 */
class Interceptor extends \Magento\Catalog\Model\Product\Price\SpecialPriceStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\SpecialPriceInterface $specialPriceResource, \Magento\Catalog\Api\Data\SpecialPriceInterfaceFactory $specialPriceFactory, \Magento\Catalog\Model\ProductIdLocatorInterface $productIdLocator, \Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Catalog\Model\Product\Price\Validation\Result $validationResult, \Magento\Catalog\Model\Product\Price\Validation\InvalidSkuProcessor $invalidSkuProcessor, array $allowedProductTypes = [], ?\Magento\Catalog\Helper\Data $catalogData = null)
    {
        $this->___init();
        parent::__construct($specialPriceResource, $specialPriceFactory, $productIdLocator, $storeRepository, $validationResult, $invalidSkuProcessor, $allowedProductTypes, $catalogData);
    }

    /**
     * {@inheritdoc}
     */
    public function update($prices)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($prices);
    }
}
