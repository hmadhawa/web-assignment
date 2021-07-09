<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donations;

class DonationController extends Controller
{

    public function index(){
        return Donations::all();
    }

    public function deleteDonation(Request $request){

        $request->validate([
            'id' => 'required'
        ]);

        try{

            $donation = Donations::find($request->id);

            $delete = Donations::where('id', $request->id)->delete();


            if($delete){
                return 1;
            }else{
                return 0;
            }

        }catch(Exception $e){
            return $e;
        }
    }

    public function insertDonations(Request $request)
    {
        // dd($request->all());

        $fname = $request->fname;
        $lname = $request->lname;
        $gender = $request->gender;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $country = $request->country;
        $date = $request->date;
        $amount = $request->amount;
        $comment = $request->comment;

        $donation_insert = Donations::insert(
            ['first_name' => $fname,
            'last_name' => $lname,
            'gender' => $gender,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'country' => $country,
            'donation_amount' => $amount,
            'comment' => $comment,
            'created_date' => $date]
        );

        return view('frontend/donation');
        
    }
}