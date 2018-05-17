<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PedidoEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $print;
    private $product;

    public function __construct($prin,$pro)
    {
      $this->print = $prin;
      $this->product = $pro;
    }

    public function build()
    {
      return $this->view('email.pedido',['print'=>$this->print,'product'=>$this->product])
                  ->subject('PEDIDO EMAIL')
                  ->from('w8tecnologia.drive@gmail.com','ODEBRECHT');
    }
}
