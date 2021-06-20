<?php
/**
 *   Name - Sanjay Kumar Das
 *   Email - sanjay.d@gmail.com
 *   Author - Sanjay
 */
namespace Codilar\Merchant\Block;
use Codilar\Merchant\Api\MerchantRepositoryInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Block\Product\Context;

class Merchant extends \Magento\Catalog\Block\Product\View
{
    /**
     * @var MerchantRepositoryInterface
     */
    private  $merchantRepository;

    /**
     * Merchant constructor.
     * @param Context $context
     * @param \Magento\Framework\Url\EncoderInterface $urlEncoder
     * @param \Magento\Framework\Json\EncoderInterface $jsonEncoder
     * @param \Magento\Framework\Stdlib\StringUtils $string
     * @param \Magento\Catalog\Helper\Product $productHelper
     * @param \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig
     * @param \Magento\Framework\Locale\FormatInterface $localeFormat
     * @param \Magento\Customer\Model\Session $customerSession
     * @param ProductRepositoryInterface $productRepository
     * @param \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency
     * @param MerchantRepositoryInterface $merchantRepository
     * @param array $data
     */
    public function __construct(
        Context $context,
        \Magento\Framework\Url\EncoderInterface $urlEncoder,
        \Magento\Framework\Json\EncoderInterface $jsonEncoder,
        \Magento\Framework\Stdlib\StringUtils $string,
        \Magento\Catalog\Helper\Product $productHelper,
        \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig,
        \Magento\Framework\Locale\FormatInterface $localeFormat,
        \Magento\Customer\Model\Session $customerSession,
        ProductRepositoryInterface $productRepository,
        \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency,
        MerchantRepositoryInterface $merchantRepository,
        array $data = [])
    {
        parent::__construct($context, $urlEncoder, $jsonEncoder, $string, $productHelper, $productTypeConfig, $localeFormat, $customerSession, $productRepository, $priceCurrency, $data);
        $this->merchantRepository = $merchantRepository;
    }

    /**
     * @return false|mixed
     */
    public function getMerchantName()
    {
        $merchantAttribute= $this->getProduct()->getCustomAttribute('merchant');
        if($merchantAttribute) {
            $collection=$this->merchantRepository->getCollection();
            $collection->addFieldToFilter('is_enable',1);
            $merchantId=$merchantAttribute->getValue();
            if(isset($merchantId)){

                $collection->addFieldToFilter('id',$merchantId);

                $merchantInfo=$collection->getFirstItem()->getData();
                return isset($merchantInfo['name']) ? $merchantInfo['name']:false;
            }
        }
        return false;
    }
}

