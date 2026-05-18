<?php
namespace Magento\Framework\Webapi\ServiceOutputProcessor;

/**
 * Interceptor class for @see \Magento\Framework\Webapi\ServiceOutputProcessor
 */
class Interceptor extends \Magento\Framework\Webapi\ServiceOutputProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Reflection\MethodsMap $methodsMapProcessor, ?\Magento\Framework\Reflection\TypeProcessor $typeProcessor = null)
    {
        $this->___init();
        parent::__construct($dataObjectProcessor, $methodsMapProcessor, $typeProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function process($data, $serviceClassName, $serviceMethodName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($data, $serviceClassName, $serviceMethodName);
    }
}
