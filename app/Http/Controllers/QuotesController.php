<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuotesController extends Controller
{
    public function newQUote(Request $request){
    // Validate the input data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);


        $quote = new Quotes();
        $quote->name = $validatedData['name'];
        $quote->email = $validatedData['email'];
        $quote->message = $validatedData['message'];
        // dd($quotes);
        // $quotes->created_at = Carbon::now();;
        // $quotes->updated_at = Carbon::now();;
        $quote->save();

        return redirect("/")->with("success","Thank you for reaching out to Webkors! We'll get back to you shortly with a complimentary quote");
    }
}
