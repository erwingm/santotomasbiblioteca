<?php

namespace App\Http\Controllers\Admin;

use App\Contact;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    //
    public function index(){
        
        // $contacts = DB::table('contacts')->paginate(10);
        return view('admin.contact.index');
    }
}
