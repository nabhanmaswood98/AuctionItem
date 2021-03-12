<?php

namespace SomethingDigital\AuctionItem\Controller\Adminhtml\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Custom Controller for Auction Item Grid
 *
 * Class Index
 */
class Index implements HttpGetActionInterface
{

    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * @param PageFactory $pageFactory
     */
    public function __construct(
        PageFactory $pageFactory
    ) {
        $this->pageFactory = $pageFactory;
    }

    /**
     * @return ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        return $resultPage;
    }
}
