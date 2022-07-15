<?php
declare(strict_types=1);

namespace Seller\Account\Controller\Adminhtml\Create;

class Index extends \Magento\Backend\App\Action
{

    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Sellerform::top_level');
        $resultPage->addBreadcrumb(__('Sellerform'), __('Sellerform'));
        $resultPage->addBreadcrumb(__('Sellerform'), __('Sellerform'));
        $resultPage->getConfig()->getTitle()->prepend(__("Sellerform"));
        return $resultPage;
    }
}

