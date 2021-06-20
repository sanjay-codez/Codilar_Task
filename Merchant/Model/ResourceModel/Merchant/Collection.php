<?php

namespace Codilar\Merchant\Model\ResourceModel\Merchant;

use Codilar\Merchant\Model\Merchant as Model;
use Codilar\Merchant\Model\ResourceModel\Merchant as ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
/**
 * class Collection
 *
 */
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
