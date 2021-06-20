<?php
/**
 *   Name - Sanjay Kumar Das
 *   Email - sanjay.d@gmail.com
 *   Author - Sanjay
 */
namespace   Codilar\Merchant\Controller\Adminhtml\Info;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class Add
 *
 * @description A magento 2 module to have Merchants for products
 * @author   Codilar Team Player <sanjay.d@codilar.com>
 *
 * A magento 2 module to have Merchants for products
 */

class Add extends Action
{
    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultResponse = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultResponse->getConfig()->getTitle()->set(__(" Add a new Merchant"));
        return $resultResponse;
    }
}

