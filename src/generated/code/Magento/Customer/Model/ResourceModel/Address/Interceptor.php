<?php
namespace Magento\Customer\Model\ResourceModel\Address;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Address
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Framework\Model\ResourceModel\Db\VersionControl\RelationComposite $entityRelationComposite, \Magento\Framework\Validator\Factory $validatorFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, $data = [], ?\Magento\Eav\Model\ResourceModel\OrphanedMultiselectCleaner $orphanedMultiselectCleaner = null, ?\Magento\Customer\Model\ResourceModel\Address\DeleteRelation $deleteRelation = null, ?\Magento\Customer\Model\CustomerRegistry $customerRegistry = null)
    {
        $this->___init();
        parent::__construct($context, $entitySnapshot, $entityRelationComposite, $validatorFactory, $customerRepository, $data, $orphanedMultiselectCleaner, $deleteRelation, $customerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }
}
