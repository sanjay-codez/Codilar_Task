<?php


namespace Codilar\Merchant\Model\DataProvider\Merchant;

use Codilar\Merchant\Model\ResourceModel\Merchant\Collection as Collection;
use Codilar\Merchant\Model\ResourceModel\Merchant\CollectionFactory as CollectionFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Ui\DataProvider\AbstractDataProvider;

class InfoProvider extends AbstractDataProvider
{
    /**
     * @var
     */
    protected $loadedData;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var Collection
     */
    private $collectionFactory;

    /**
     * DataProvider constructor.
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $collectionFactory
     * @param RequestInterface $request
     * @param array $meta
     * @param array $data
     */
    public function __construct( $name, $primaryFieldName, $requestFieldName, CollectionFactory $collectionFactory, RequestInterface $request, array $meta = [], array $data = [])
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
        $this->request = $request;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $id = $this->request->getParam('id');
        $items = $this->collectionFactory->create()->addFieldToFilter('id', $id)->getItems();
        foreach ($items as $item) {
            $merchantData = $item->getData();
            $this->loadedData[$item->getId()] = $merchantData;
        }
        return $this->loadedData;
    }
}


