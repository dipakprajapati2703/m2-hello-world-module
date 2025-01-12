<?php
namespace MageDip\Helloworld\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class ExampleViewModel implements ArgumentInterface
{

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return 'Congratulations! This text is coming from View Model.';
    }
}
