<?php
namespace Magento\WishlistGraphQl\Model\Resolver\Wishlist\AddToCart;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\Wishlist\AddToCart
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\Wishlist\AddToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper, \Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForCustomer $createEmptyCartForCustomer, \Magento\Quote\Model\Cart\AddProductsToCart $addProductsToCart, \Magento\WishlistGraphQl\Model\CartItems\CartItemsRequestBuilder $cartItemsRequestBuilder, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId)
    {
        $this->___init();
        parent::__construct($wishlistResource, $wishlistFactory, $wishlistConfig, $wishlistDataMapper, $createEmptyCartForCustomer, $addProductsToCart, $cartItemsRequestBuilder, $cartRepository, $maskedQuoteIdToQuoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
