<?php
namespace Magento\QuoteCommerceCeGraphQl\Model\Resolver\ClearCart;

/**
 * Interceptor class for @see \Magento\QuoteCommerceCeGraphQl\Model\Resolver\ClearCart
 */
class Interceptor extends \Magento\QuoteCommerceCeGraphQl\Model\Resolver\ClearCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteCommerceCeGraphQl\Model\Cart\ClearCartError $clearCartError, \Magento\QuoteCommerceCeGraphQl\Model\Cart\ClearCartItems $clearCartItems)
    {
        $this->___init();
        parent::__construct($clearCartError, $clearCartItems);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null): array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
