<?php
namespace Magento\SalesRule\Api\Data;

/**
 * Extension class for @see \Magento\SalesRule\Api\Data\ConditionInterface
 */
class ConditionExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ConditionExtensionInterface
{
    /**
     * @return string|null
     */
    public function getAttributeScope()
    {
        return $this->_get('attribute_scope');
    }

    /**
     * @param string $attributeScope
     * @return $this
     */
    public function setAttributeScope($attributeScope)
    {
        $this->setData('attribute_scope', $attributeScope);
        return $this;
    }
}
