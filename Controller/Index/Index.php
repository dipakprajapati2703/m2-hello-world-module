<?php
/**
 * @category  MageDip
 * @package   MageDip_Helloworld
 */
namespace MageDip\Helloworld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param PageFactory $resultPageFactory
     */
    public function __construct(PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        return $this->resultPageFactory->create();
    }
}
