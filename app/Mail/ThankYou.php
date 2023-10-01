<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ThankYou extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank You',
        );
    }


    // public function build()
    // {
    //     return $this
    //         ->subject('Thank You') // Set the subject
    //         ->view('mail.thankyou') // Set the view for the email content
    //         ->with([]) // You can pass data to your view if needed
    //         ->attach(('https://designyourrestaurant.com/images/logo.png'), [
    //             'as' => 'profile-image.jpg',
    //             'mime' => 'image/jpeg',
    //         ]); // Attach the profile image
    // }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.thankyou'
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
