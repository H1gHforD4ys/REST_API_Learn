<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource; // trả về dữ liệu data

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Show tất cả người dùng
        //return CustomerResource::collection(Customer::all());
        return Customer::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Tạo người dùng
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Lưu người dùng vào database
        $request->validate([
            'name_customer' => 'required',
            'email_customer' => 'required',
            'phone_customer' => 'required',
            'address_customer' => 'required',
            'city_customer' => 'required'
        ]);

        $customer = Customer::create($request->all());

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer) // theo chuẩn trong php artisan route::list
    {
        //Hiển thị người dùng có có id = $customer
        return new CustomerResource($customer); // dữ liệu lưu dạng json trả về biến data
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Chỉnh sửa người dùng
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Customer $customer)
    {
        //Update người dùng
        $customer->update($request->all());

        return new CustomerResource($customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //Xóa người dùng
        $customer->delete();
    }
}
