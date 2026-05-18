<?php
namespace Magento\PageCache\Model\App\Request\Http\IdentifierForSave;

/**
 * Interceptor class for @see \Magento\PageCache\Model\App\Request\Http\IdentifierForSave
 */
class Interceptor extends \Magento\PageCache\Model\App\Request\Http\IdentifierForSave implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\App\Http\Context $context, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\PageCache\Model\App\Request\Http\IdentifierStoreReader $identifierStoreReader, ?\Magento\Framework\App\PageCache\Identifier $identifier = null)
    {
        $this->___init();
        parent::__construct($request, $context, $serializer, $identifierStoreReader, $identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue();
    }
}
