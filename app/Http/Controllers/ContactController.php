<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'company' => 'nullable|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $client = new Client;
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('services.recaptcha.secret'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);

        if (! $responseData['success']) {
            return back()->withErrors(['g-recaptcha-response' => 'ReCAPTCHA validation failed.']);
        }

        $details = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'message' => $request->input('message'),
        ];

        Mail::to(env('MAIL_CONTACT'))->send(new ContactMail($details));

        return back()->with('message', 'Email sent successfully!');
    }
}
