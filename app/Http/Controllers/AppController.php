<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AppController extends Controller
{


    public function index()
    {
        return view('website.dist.index');
    }

    public function registerPage()
    {
        if (session()->has('email')) {
            return redirect()->route('dashPage');
        } else {
            return view('website.dist.register');
        }
    }

    public function loginPage()
    {
        if (session()->has('email')) {
            return redirect()->route('dashPage');
        } else {
            return view('website.dist.login');
        }
    }

    public function maindash()
    {
        if (session()->has('email')) {
            $data = DB::table('schoolAppDb')
                ->where('user_email', '=', session()->get('email'))
                ->first();
            return view('website.dist.submitteddashboard', compact('data'));
        } else {
            return redirect('/');
        }
    }

    public function dashboard()
    {
        if (session()->has('email')) {
            $data = DB::table('schoolAppDb')
                ->where('user_email', '=', session()->get('email'))
                ->first();
            if ($data->course == []) {
                return view('website.dist.studentdashboard', compact('data'));
            } else {
                return redirect()->route('stud');
            }
        } else {
            return redirect('/');
        }
    }

    public function register_user(Request $request)
    {
        $request->validate([
            'email' => 'required|string|unique:schoolAppDb',
            'number' => 'required|string',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $query = DB::table('schoolAppDb')->insert([
            'user_email' => $request->input('email'),
            'phone_number' => $request->input('number'),
            'password' => Hash::make($request->input('password')),
            'application_status' => 'pending',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        if ($query) {
            // session initialization
            $request->session()->put('email', $request->input('email'));
            // dashboard page view
            return redirect()->route('dashPage');
        } else {
            return back()->with("error", "Failed to create an account");
        }
    }

    // Login Function

    public function login(Request $request)
    {
        // fields validation
        $request->validate([
            'email' => 'required|string',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        // database query
        $query = DB::table('schoolAppDb')
            ->where([
                'user_email' => $request->input('email'),
            ])
            ->first();

        if ($query) {
            if (Hash::check($request->password, $query->password)) {
                // session initialization
                $request->session()->put('email', $request->input('email'));
                // dashboard page view
                return redirect()->route('dashPage');
            } else {
                return back()->with("error", "password or email mismatch");
            }
        } else {
            return back()->with("error", "No accounts found");
        }
    }


    public function create_info(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'course' => 'required|string',

            // guardian validation
            'g_first_name' => 'required|string',
            'g_last_name' => 'required|string',
            'g_email' => 'required|string',
            'g_phone_number' => 'required|string',
            'g_address' => 'required|string',
        ]);

        $query = DB::table('schoolAppDb')
            ->where('user_email', '=', session()->get('email'))
            ->update([
                'fullname' => $request->input('first_name') . ' ' . $request->input('last_name'),
                'phone_number' => $request->input('phone_number'),
                'address' => $request->input('address'),
                'course' => $request->input('course'),

                'g_name' => $request->input('g_first_name') . ' ' . $request->input('g_last_name'),
                'g_email' => $request->input('g_email'),
                'g_phone' => $request->input('g_address_number'),
                'g_address' => $request->input('g_address'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]);

        if ($query) {
            return redirect()->route('stud');
        } else {
            return back()->with('error', 'sorry, failed to save your information');
        }
    }

    public function logout()
    {
        session()->pull('email');
        return redirect('/');
    }
}
