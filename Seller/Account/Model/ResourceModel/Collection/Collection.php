<?php
namespace Seller\Account\Model\ResourceModel\Collection;
use Seller\Account\Model\Seller as SellerModel;
use Seller\Account\Model\ResourceModel\Seller as SellerResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(SellerModel::class, SellerResourceModel::class);
    }
}

