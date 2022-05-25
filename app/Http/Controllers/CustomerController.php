<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Customers';
        $data['q'] = $request->get('q');
        $data['customers'] = Customer::where('customer_name', 'like', '%' . $data['q'] . '%')->get();

        $data['q'] = $request->query('q');
        $data['category_id'] = $request->query('category_id');
        $data['start'] = $request->query('startz');
        $data['end'] = $request->query('end');
        $data['categories'] = Category::all();
        $data['operators'] = [
            '=' => 'equal to',
            '<>' => 'not equal to',
            '>' => 'greater than',
            '>=' => 'greater than or equal to',
            '<' => 'less than',
            '<=' => 'less than or equal to',
            'between' => 'between',
        ];
        $data['total_operator'] = $request->get('total_operator');
        $data['total_value'] = $request->get('total_value');
        $data['total_value_end'] = $request->get('total_value_end');

        $data['title'] = 'Customers';
        $data['kelas'] = $request->get('kelas');
        $data['bulan'] = $request->get('bulan');
        $data['customers'] = Customer::where('customer_name', 'like', '%' . $data['kelas'] . '%')->get();
        $data['customers'] = Customer::where('contact_name', 'like', '%' . $data['bulan'] . '%')->get();

        $data['kelas'] = $request->query('kelas');
        $data['bulan'] = $request->query('bulan');
        $data['customer_name'] = $request->query('customer_name');
        $data['contact_name'] = $request->query('contact_name');
        $data['start'] = $request->query('start');
        $data['end'] = $request->query('end');
        $data['customers'] = Customer::all();
        $data['operators'] = [
            '=' => 'equal to',
            '<>' => 'not equal to',
            '>' => 'greater than',
            '>=' => 'greater than or equal to',
            '<' => 'less than',
            '<=' => 'less than or equal to',
            'between' => 'between',
        ];
        $data['total_operator'] = $request->get('total_operator');
        $data['total_value'] = $request->get('total_value');
        $data['total_value_end'] = $request->get('total_value_end');

        $query = OrderDetail::select('order_details.*', 'orders.*', 'customers.*', 'categories.*', 'products.*', DB::raw('quantity * price AS total'))
            ->join('products', 'products.product_id', '=', 'order_details.product_id')
            ->join('orders', 'orders.order_id', '=', 'order_details.order_id')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
           
            ->where(function ($query) use ($data) {
               
                $query->Where('customer_name', 'like', '%' . $data['kelas'] . '%');
                $query->Where('contact_name', 'like', '%' . $data['bulan'] . '%');
            });

        if ($data['start'])
            $query->whereDate('order_date', '>=', $data['start']);
        if ($data['end'])
            $query->whereDate('order_date', '<=', $data['end']);
        if ($data['customer_name'])
            $query->where('customers.customer_name', $data['customer_name']);
        if ($data['category_id'])
            $query->where('categories.category_id', $data['category_id']);
        if ($data['contact_name'])
            $query->where('customers.contact_name', $data['contact_name']);
        if ($data['total_operator']) {
            if ($data['total_operator'] == 'between')
                $query->whereRaw('quantity * price between ? AND ?', [$data['total_value'], $data['total_value_end']]);
            else
                $query->whereRaw('quantity * price ' . $data['total_operator'] . ' ? ', $data['total_value']);
        }

        $data['title'] = 'Customers';
        $data['kelas'] = $request->get('kelas');
        $data['customers'] = Customer::where('customer_name', 'like', '%' . $data['kelas'] . '%')->get();
        $data['bulan'] = $request->get('bulan');
        $data['customers'] = Customer::where('contact_name', 'like', '%' . $data['bulan'] . '%')->get();
        
        return view('customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Customer';
        return view('customer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'contact_name' => 'required',
        ]);

        $customer = new Customer($request->all());
        $customer->save();
        return redirect('datasiswa')->with('success', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
       
        $data['customer'] = $customer;
        return view('customer.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $data['title'] = 'Edit Customer';
        $data['customer'] = $customer;
        return view('customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'customer_name' => 'required',
            'contact_name' => 'required',
        ]);

        $customer->customer_name = $request->customer_name;
        $customer->nisn = $request->nisn;
        $customer->contact_name = $request->contact_name;
        $customer->kelas_jurusan = $request->kelas_jurusan;
        $customer->tanggal = $request->tanggal;
        $customer->jumlah_bayar = $request->jumlah_bayar;
        $customer->status = $request->status;
        $customer->save();
        return redirect('customer')->with('success', 'Customer updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customer')->with('success', 'Customer deleted successfully');
    }
}