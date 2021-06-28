<?php

namespace App\Http\Controllers\Admin;

use App\ContactInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use DB;

class ContactInfoController extends Controller
{
    public function contactInfo() {
        $contact_info = DB::table('contact_info')
            ->where('id', 1)
            ->first();

        return view('admin.contact.info', compact('contact_info'));
    }

    public function contactUpdate(Request $request) {
        $contactInfo = ContactInfo::find(1);

        $contactInfo->address = $request->address;
        $contactInfo->phone_number = $request->phone_number;
        $contactInfo->email = $request->email;
        $contactInfo->lat = $request->lat;
        $contactInfo->long = $request->long;
        $contactInfo->facebook_link = $request->facebook_link;
        $contactInfo->youtube_link = $request->youtube_link;
        $contactInfo->instagram_link = $request->instagram_link;
        $contactInfo->zipcode = $request->zipcode;

        if ($contactInfo->save()) {
            return redirect()->route('admin.contact.info')->with('success', 'Амжилттай шинэчлэгдлээ');
        }

        return redirect()->route('admin.contact.info')->with('error', 'Алдаа гарлаа');
    }
}
