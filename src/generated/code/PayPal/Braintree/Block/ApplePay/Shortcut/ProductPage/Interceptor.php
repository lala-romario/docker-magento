<?php
namespace PayPal\Braintree\Block\ApplePay\Shortcut\ProductPage;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\ApplePay\Shortcut\ProductPage
 */
class Interceptor extends \PayPal\Braintree\Block\ApplePay\Shortcut\ProductPage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Model\MethodInterface $payment, \PayPal\Braintree\Model\ApplePay\Auth $auth, array $data = [], ?\PayPal\Braintree\Gateway\Config\ApplePay\Config $applePayConfig = null, ?\Magento\Tax\Helper\Data $taxHelper = null, ?\Magento\Catalog\Helper\Data $catalogHelper = null, ?\Magento\Customer\Model\Session $customerSession = null, ?\Magento\Quote\Model\QuoteIdToMaskedQuoteIdInterface $maskedQuoteId = null)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $payment, $auth, $data, $applePayConfig, $taxHelper, $catalogHelper, $customerSession, $maskedQuoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getAmount(): float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmount');
        return $pluginInfo ? $this->___callPlugins('getAmount', func_get_args(), $pluginInfo) : parent::getAmount();
    }
}
