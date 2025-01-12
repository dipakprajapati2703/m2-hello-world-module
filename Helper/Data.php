<?php
/**
 * @category  MageDip
 * @package   MageDip_Helloworld
 */
namespace MageDip\Helloworld\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
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