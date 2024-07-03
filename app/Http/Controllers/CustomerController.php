<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display the specified customer's profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $customer = auth()->user();
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified customer's profile in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $customer = auth()->user();
        $customer->update($request->all());
        return redirect()->route('customers.edit');
    }

    /**
     * Show the form for logging in.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            return redirect()->route('home');
        }
        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Show the form for registering a new customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $customer = Customer::create($request->all());
        auth()->login($customer);
        return redirect()->route('home');
    }

    /**
     * Handle a logout request for the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
