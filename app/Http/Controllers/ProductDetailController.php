<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Customer;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(Request $request)
    {
        $data['q'] = $request->query('q');
        $data['category_id'] = $request->query('category_id');
        $data['start'] = $request->query('start');
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

        
        $data['q'] = $request->query('q');
        $data['customer_id'] = $request->query('customer_id');
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

        $data['q'] = $request->query('q');
        $data['product_id'] = $request->query('product_id');
        $data['start'] = $request->query('start');
        $data['end'] = $request->query('end');
        $data['products'] = Product::all();
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
            ->join('customers', 'customers.customer_id', '=', 'orders.customer_id')
            ->join('categories', 'categories.category_id', '=', 'products.category_id')
            ->where(function ($query) use ($data) {
                $query->where('product_name', 'like', '%' . $data['q'] . '%');
                $query->orWhere('customer_name', 'like', '%' . $data['q'] . '%');
                $query->orWhere('category_name', 'like', '%' . $data['q'] . '%');
            });

        if ($data['start'])
            $query->whereDate('order_date', '>=', $data['start']);
        if ($data['end'])
            $query->whereDate('order_date', '<=', $data['end']);
        if ($data['category_id'])
            $query->where('categories.category_id', $data['category_id']);
        if ($data['customer_id'])
            $query->where('customers.customer_id', $data['customer_id']);   
        if ($data['product_id'])
            $query->where('products.product_id', $data['product_id']);    
        if ($data['total_operator']) {
            if ($data['total_operator'] == 'between')
                $query->whereRaw('quantity * price between ? AND ?', [$data['total_value'], $data['total_value_end']]);
            else
                $query->whereRaw('quantity * price ' . $data['total_operator'] . ' ? ', $data['total_value']);
        }

        $data['order_details'] = $query->paginate(15)->withQueryString();
        return view('datapembayaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
