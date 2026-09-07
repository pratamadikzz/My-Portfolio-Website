<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::raw($validated['message'], function ($mail) use ($validated) {
            $mail->to(config('mail.to_address'))
                ->replyTo($validated['email'], $validated['name'])
                ->subject('New portfolio message from ' . $validated['name']);
        });

        return back()->with('contact_success', 'Pesan berhasil dikirim. Terima kasih sudah menghubungi saya.');
    }
}
