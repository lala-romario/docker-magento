<?php
namespace Magento\Framework\View\Element\Template\File\Resolver;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\Template\File\Resolver
 */
class Interceptor extends \Magento\Framework\View\Element\Template\File\Resolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\FileSystem $viewFileSystem, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($viewFileSystem, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplateFileName($template, $params = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTemplateFileName');
        return $pluginInfo ? $this->___callPlugins('getTemplateFileName', func_get_args(), $pluginInfo) : parent::getTemplateFileName($template, $params);
    }
}
