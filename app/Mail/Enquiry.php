<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Enquiry extends Mailable
{
    use Queueable, SerializesModels;

    public $detail=DB::table('enquiries')->OrderBy('id','desc')->first();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($detail)
    {
         $this->detail = $detail;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           return $this->subject('Mail from ItSolutionStuff.com')
                    ->view('front.email.enquiry');
        //return $this->view('view.name');
    }
}
