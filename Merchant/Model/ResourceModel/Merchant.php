<?php

namespace Codilar\Merchant\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * class Merchant
 */
class Merchant extends AbstractDb
{
    const MAIN_TABLE = 'codilar_merchant_info';
    const ID_FIELD_NAME = 'id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
