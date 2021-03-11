<?php

namespace SomethingDigital\AuctionItem\Controller\Request;

use Composer\DependencyResolver\Request;
use Magento\Backend\Model\View\Result\RedirectFactory;
use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Framework\App\RequestInterface;

/**
 * Custom Controller Auction Item Post
 *
 * Class Index
 */
class Post implements HttpPostActionInterface
{

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var RedirectFactory
     */
    protected $redirectFactory;

    /**
     * @param RequestInterface $request
     */
    public function __construct(
        RequestInterface $request,
        RedirectFactory $redirectFactory
    ) {
        $this->request = $request;
        $this->redirectFactory = $redirectFactory;
    }

    /**
     * @return ResultInterface
     */
    public function execute()
    {
        $redirect = $this->redirectFactory->create();
        $redirect->setUrl('/rp_auction/request/form');

        return $redirect;
    }
}
