<?php
namespace NttData\Practice\Block\Products;
class Products extends \Magento\Framework\View\Element\Template
{    
  
     protected $_orderCollectionFactory;

    public function __construct(
        Magento\Framework\App\Action\Context $context,
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory 
    ) {
        $this->_orderCollectionFactory = $orderCollectionFactory;
        parent::__construct($context);

    }


   public function getOrderCollection()
   {
       $collection = $this->_orderCollectionFactory->create()
         ->addAttributeToSelect('*')
         ->addFieldToFilter($field, $condition); //Add condition if you wish
     
     return $collection;
     
    }


   public function getOrderCollectionByCustomerId($customerId)
   {
       $collection = $this->_orderCollectionFactory()->create($customerId)
         ->addFieldToSelect('*')
         ->addFieldToFilter('status',
                ['in' => $this->_orderConfig->getVisibleOnFrontStatuses()]
            )
         ->setOrder(
                'created_at',
                'desc'
            );
 
     return $collection;

    }
}
