<?php
namespace Magento\Bundle\Model\ResourceModel\Indexer\OptionQtyExpressionProvider;

/**
 * Interceptor class for @see \Magento\Bundle\Model\ResourceModel\Indexer\OptionQtyExpressionProvider
 */
class Interceptor extends \Magento\Bundle\Model\ResourceModel\Indexer\OptionQtyExpressionProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getExpression(): \Zend_Db_Expr
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExpression');
        return $pluginInfo ? $this->___callPlugins('getExpression', func_get_args(), $pluginInfo) : parent::getExpression();
    }
}
