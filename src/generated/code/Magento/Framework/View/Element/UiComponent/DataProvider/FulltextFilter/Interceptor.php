<?php
namespace Magento\Framework\View\Element\UiComponent\DataProvider\FulltextFilter;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\UiComponent\DataProvider\FulltextFilter
 */
class Interceptor extends \Magento\Framework\View\Element\UiComponent\DataProvider\FulltextFilter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function apply(\Magento\Framework\Data\Collection $collection, \Magento\Framework\Api\Filter $filter)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'apply');
        return $pluginInfo ? $this->___callPlugins('apply', func_get_args(), $pluginInfo) : parent::apply($collection, $filter);
    }
}
