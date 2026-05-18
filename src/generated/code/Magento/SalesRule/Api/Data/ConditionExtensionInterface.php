<?php
namespace Magento\SalesRule\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\SalesRule\Api\Data\ConditionInterface
 */
interface ConditionExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getAttributeScope();

    /**
     * @param string $attributeScope
     * @return $this
     */
    public function setAttributeScope($attributeScope);
}
