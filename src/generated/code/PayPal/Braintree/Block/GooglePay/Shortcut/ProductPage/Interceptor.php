<?php
namespace PayPal\Braintree\Block\GooglePay\Shortcut\ProductPage;

/**
 * Interceptor class for @see \PayPal\Braintree\Block\GooglePay\Shortcut\ProductPage
 */
class Interceptor extends \PayPal\Braintree\Block\GooglePay\Shortcut\ProductPage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Payment\Model\MethodInterface $payment, \PayPal\Braintree\Model\GooglePay\Auth $auth, \PayPal\Braintree\Gateway\Config\GooglePay\Config $googlePayConfig, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Locale\FormatInterface $localeFormat, array $data = [], ?\Magento\Catalog\Helper\Data $catalogHelper = null, ?\Magento\Customer\Model\Session $customerSession = null, ?\Magento\Quote\Model\QuoteIdToMaskedQuoteIdInterface $maskedQuoteId = null, ?\PayPal\Braintree\Gateway\Config\Config $braintreeConfig = null)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $payment, $auth, $googlePayConfig, $taxHelper, $localeFormat, $data, $catalogHelper, $customerSession, $maskedQuoteId, $braintreeConfig);
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
