<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminContorller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ResetPasswordMail;
use App\Models\Adminaccounts;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        $admin = AdminAccounts::where('email', $credentials['email'])->first();
        
        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            $request->session()->put('authenticated', true);
            $request->session()->put('admin', $admin);
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
        //dd(session()->all());
    }

    /*public function dashboard(){

        return view('/dashboard');
       $this->middleware('auth');
    }*/

    public function logout(Request $request)
    {
        $request->session()->forget('authenticated');
        return redirect('/auth/login');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validation logic here...
        $validator = Validator::make($request->all(), [
        'fname' => 'required|string|max:255',
        'lname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/auth/register')
                    ->withErrors($validator)
                    ->withInput()
                    ->with('Fail','Failed entry');
        }

        $user = new Adminaccounts();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect or other response...
        return redirect('/auth/login')->with('success', 'Account created successfully. You can now login.');
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot');
    }

    public function forgotPassword(Request $request)
    {
        // Generate and send reset password link logic...

        $adminacc = adminaccounts::where('email', $request->email)->first();

        if ($adminacc) {
            // Generate and send reset password link...
            Mail::to($adminacc->email)->send(new ResetPasswordMail($adminacc));
        }

        // Redirect or other response...
    }

    public function dashboard()
    {
        return view('administrator.dashboard');
    }

    public function profile()
    {
        return view('profile');
    }

    /*public function showTestAPI(){
        return view('administrator.testconnectionapi');
    }

    public function connectToApi()
    {
        $client = new Client();
        
        try {
            $response = $client->request('GET', 'localhost');
            $statusCode = $response->getStatusCode();
            
            if ($statusCode == 200) {
                $responseData = json_decode($response->getBody(), true);
                // Process the response data as needed
                return response()->json(['data' => $responseData], 200);
            } else {
                return response()->json(['error' => 'Failed to connect to API'], $statusCode);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }*/
}
