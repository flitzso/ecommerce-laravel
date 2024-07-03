<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = User::where('is_admin', false)->get();
        return view('admin.customers.index', compact('customers'));
    }

    public function edit(User $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    public function update(Request $request, User $customer)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $customer->id,
        ]);

        $customer->update($request->all());
        return redirect()->route('admin.customers.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    public function destroy(User $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customers.index')->with('success', 'Cliente deletado com sucesso.');
    }
}
