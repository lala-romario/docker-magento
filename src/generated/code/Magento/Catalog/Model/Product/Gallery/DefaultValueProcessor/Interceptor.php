<?php
namespace Magento\Catalog\Model\Product\Gallery\DefaultValueProcessor;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\DefaultValueProcessor
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\DefaultValueProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\MediaGalleryValue $mediaGalleryValueResource, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($mediaGalleryValueResource, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Catalog\Model\Product $product, ?array $data = null, ?int $storeId = null): ?array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($product, $data, $storeId);
    }
}
