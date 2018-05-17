<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
      return $this->view('email.login')
                  ->subject('SITE LOGIN')
                  ->from('w8tecnologia.drive@gmail.com','ODEBRECHT');
    }

}
