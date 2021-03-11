<?php

namespace SomethingDigital\AuctionItem\Controller\Index;

use Composer\DependencyResolver\Request;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Result\PageFactory;
/**
 * Custom Controller for Auction Item display Page
 *
 * Class Index
 * @package SomethingDigital\AuctionItem\Controller\Index
 */
class Index implements ActionInterface
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param PageFactory $pageFactory
     * @param RequestInterface $request
     */
    public function __construct(
        PageFactory $pageFactory,
        RequestInterface $request
    ) {
        $this->pageFactory = $pageFactory;
        $this->request = $request;
    }

    /**
     * Execute function that returns page
     *
     * @return ResultInterface
     */
    public function execute()
    {
        return $this->pageFactory->create();
    }
}