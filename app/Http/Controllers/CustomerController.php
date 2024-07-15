<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Course; 
use App\Models\Classroom;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //一覧表示
    public function index(Customer $customer)
    {
        return view('customers.index')->with(['customers' => $customer->get()]);  
    }

    //詳細表示
    public function show(Customer $customer)
    {
        return view('customers.show')->with(['customer' => $customer]);
    }
    
    //顧客情報追加
    public function add()
    {
        $courses = Course::all();
        $classrooms = Classroom::all();
        return view('customers.add', compact('courses', 'classrooms'));
    }
    public function store(Request $request, Customer $customer)
    {
        $input = $request['customer'];
        $customer->fill($input)->save();
        
        return redirect('/customers/' . $customer->id);
    }
    
    //顧客情報編集
    public function edit(Customer $customer)
    {
        $courses = Course::all();
        $classrooms = Classroom::all();
        return view('customers.edit', compact('customer', 'courses', 'classrooms'));
    }
    public function update(Request $request, Customer $customer)
    {
        $input_customer = $request['customer'];
        $customer->fill($input_customer)->save();
    
        return redirect('/customers/' . $customer->id);
    }
    
    //削除
    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect('/');
    }
    
    //検索
    public function search()
    {
        return view('customers.search');
    }
}
