<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\RequestMessage;
use App\Models\Services;
use App\Models\Subscriber;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $properties = Property::get();
        $messages = RequestMessage::get();
        $services = Services::get();
        $subscriber = Subscriber::get();
        return view('backend.index', compact('properties', 'messages', 'services', 'subscriber'));
    }

    public function authLogout()
    {
        Session::flush();

        Auth::logout();
        Toastr::success('Logout Successful');

        return redirect(route('admin'));
    }
}
