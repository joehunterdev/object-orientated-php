<?php

class Reservation
{
    private $host = 'Host Class';
    private $guest = 'Guest Class';

    public function cancelReservation($reservationId)
    {
        //cancellation logic
        //the pint here is there are lots of things that need to be done. However we simply handle this in a single method
        $this->sendCancellationEmail($reservationId);
        $this->refundGuest();
    }

    public function getReservationDetails($reservationId)
    {
        //get reservation details
        return 'Sending notificition to '. $this->host;
    }


    private function sendCancellationEmail($reservationId)
    {
        //send email to the user

        echo 'Sending email cancel to '. $this->guest;
    }

    private function refundGuest(){
        echo 'Refunding the guest' .$this->guest;
    }
}
