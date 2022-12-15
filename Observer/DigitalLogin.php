<?php

namespace DigitalCollege\Dev\Observer;

use Magento\Framework\Event\ObserverInterface;

class DigitalLogin implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        echo "Paramos na Nossa Observer!";
        $customer = $observer->getEvent()->getCustomer();
        echo $customer->getName(); //O Método é o nome da coluna
        exit;
    }
}
