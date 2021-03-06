<?php

namespace Codilar\Merchant\Model\Source\Config\Merchant;
use Codilar\Merchant\Model\ResourceModel\Merchant\CollectionFactory;

class Source extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * Source constructor.
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory
    )
    {
        $this->collectionFactory = $collectionFactory;
    }
    /**
     * @return array
     */
    public function getAllOptions()
    {
        $collections = $this->collectionFactory->create();
        $result = [];
        $result[] = [
            'label' => '-----Select-----',
            'value' => ''
        ];
        foreach ($collections as $collection) {
            if ($collection->getIsEnable()) {
                $result[] = [
                    'label' => $collection->getName(),
                    'value' => $collection->getId()
                ];
            }
        }
        return $result;
    }
}

