<?php
/**
 * @category  MageDip
 * @package   MageDip_Helloworld
 */
namespace MageDip\Helloworld\Block;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get hello world text
     *
     * @return string
     */
    public function getHelloWorldText()
    {
        return 'Hello World!';
    }

    /**
     * Get module welcome message
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return 'Welcome to our first Magento 2 module!';
    }
}
