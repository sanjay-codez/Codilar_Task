<?php

namespace Codilar\Merchant\Model;

use Magento\Framework\Model\AbstractModel;
use Codilar\Merchant\Model\ResourceModel\Merchant as ResourceModel;

class Merchant extends AbstractModel
{
    /**
     *  Getting ResourceModel
     */
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
