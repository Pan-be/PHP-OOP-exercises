<?php

class Reservation
{
    private $host = 'Host class';
    private $guest = 'Guest class';

    public function cancel()
    {
        $this->sendCancellationNotification();

        $this->refundGuest();
    }

    private function sendCancellationNotification()
    {
        echo 'Sending Notification to ' . $this->host . '<br>';
    }
    
    private function refundGuest()
    {
        echo 'Refunding ' . $this->guest . '<br>';
        
    }
}