<?php
namespace Magento\Quote\Model\Quote\Item\Repository;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\Repository
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Quote\Api\Data\CartItemInterfaceFactory $itemDataFactory, \Magento\Quote\Model\Quote\Item\CartItemOptionsProcessor $cartItemOptionsProcessor, array $cartItemProcessors = [], ?\Magento\Quote\Model\QuoteMutexInterface $quoteMutex = null, ?\Magento\Quote\Model\Quote\Item\CartItemValidatorInterface $cartItemValidator = null)
    {
        $this->___init();
        parent::__construct($quoteRepository, $productRepository, $itemDataFactory, $cartItemOptionsProcessor, $cartItemProcessors, $quoteMutex, $cartItemValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartItemInterface $cartItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($cartItem);
    }
}
