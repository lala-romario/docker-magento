<?php
namespace Magento\Framework\Webapi\RequestAwareErrorProcessor;

/**
 * Interceptor class for @see \Magento\Framework\Webapi\RequestAwareErrorProcessor
 */
class Interceptor extends \Magento\Framework\Webapi\RequestAwareErrorProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Json\Encoder $encoder, \Magento\Framework\App\State $appState, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\App\Request\Http $request = null, ?\Magento\Framework\HTTP\PhpEnvironment\Response $response = null)
    {
        $this->___init();
        parent::__construct($encoder, $appState, $logger, $filesystem, $serializer, $request, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function maskException(\Exception $exception)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'maskException');
        return $pluginInfo ? $this->___callPlugins('maskException', func_get_args(), $pluginInfo) : parent::maskException($exception);
    }
}
