<?php
namespace Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddressV2;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddressV2
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddressV2 implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\Address\GetCustomerAddressV2 $getCustomerAddress, \Magento\CustomerGraphQl\Model\Customer\Address\UpdateCustomerAddress $updateCustomerAddress, \Magento\CustomerGraphQl\Model\Customer\Address\ExtractCustomerAddressData $extractCustomerAddressData, \Magento\Framework\GraphQl\Query\Uid $uidEncoder)
    {
        $this->___init();
        parent::__construct($getCustomerAddress, $updateCustomerAddress, $extractCustomerAddressData, $uidEncoder);
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
