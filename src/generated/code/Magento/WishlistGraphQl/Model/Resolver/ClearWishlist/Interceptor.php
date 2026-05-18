<?php
namespace Magento\WishlistGraphQl\Model\Resolver\ClearWishlist;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\ClearWishlist
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\ClearWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\Wishlist\Model\ResourceModel\ClearWishlist $clearWishlistResource, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper)
    {
        $this->___init();
        parent::__construct($wishlistConfig, $clearWishlistResource, $wishlistFactory, $wishlistResource, $wishlistDataMapper);
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
