<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MoneyForex;
use App\Mail\ForexQuoteRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class UserController extends Controller
{

    protected $rules = [
        'name' => 'required',
        'mobile' => 'required|numeric|min:1',
        'email' => 'required|email',
    ];

    public function submitForm()
    {
        // $this->validate();

        // MoneyForex::create([
        //     'name' => $this->name,
        //     'mobile' => $this->mobile,
        //     'email' => $this->email,
        // ]);

        try {
            // Send a simple raw email to test SMTP
            Mail::to('ahamadraja9721@gmail.com')->send(new ForexQuoteRequest());
            session()->flash('Email Sented.!2. ');

            }


        catch (\Exception $e) {
            session()->flash('error', 'Error sending email: ' . $e->getMessage());
        }
        // session()->flash('success', 'Forex quote request sent successfully.');
        // $this->reset();
        redirect()->back();



    }


public function store(Request $request)
{
    $data = $request->all(); // Get all form data
    Mail::to('ahamadraja9721@gmail.com')->send(new ContactFormMail($data));

    return back()->with('success', 'Your message has been sent!');
}


public function clearCache(){
    Artisan::call('optimize');
    return "DEAR ADMIN YOUR APPLICATION CACHES ARE CLEARED !";
}

public function migrate(){
    try {
        // Capture the output from the Artisan command
        Artisan::call('migrate', ['--force' => true]); // '--force' to run without confirmation in production

        // Get the output as a string
        $outputString = Artisan::output();

        // Return the output to the view or as a response
        // return response()->json(['status' => 'success', 'message' => $outputString]);
        return $outputString;
    } catch (\Exception $e) {
        // Catch any errors and return them
       return $e->getMessage();
        // return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    }
}



}
