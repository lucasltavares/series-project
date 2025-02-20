<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SeriesCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        public string $userEmail,
        public string $nomeSerie,
        public int $IdSerie,
        public int $qtdTemporadas,
        public int $episodiosPorTemporada
    )
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->view('mail.series-created');
        return $this
            ->markdown('mail.series-created')
            ->to($userEmail);
    }
}
