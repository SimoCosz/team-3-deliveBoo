<?php

namespace App\Http\Controllers\Api;
use App\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('products')->get();
        return response()->json([
            'orders' => $orders,
            'succes'=> true
        ]);
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
        $request->validate([
            'form.client_name'=>"required|min:2|max:30",
            'form.client_surname'=>"required|min:2|max:30",
            'form.client_address'=>"required|min:4|max:60",
            'form.client_city'=>"required|min:2|max:50",
            'form.client_phone'=>"required|min:9999999|max:9999999999999999|numeric",
            'form.client_email'=>'required|email|max:50',
        ]);

        $data = $request->all();
        $total = $data['total'];
        $userId = $data['cartUserId'];

        foreach ($data as  $value) {
            $order = new Order();
            $order->fill($value);
            $order->total_price = $total;
            $order->user_id = $userId;
            $order->payment_state = false;

            $order->save();
            return [$value, $total];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::with('products')->where('id',$id)->first();
        
        return response()->json([
            'orders' => $orders,
            'succes' => true
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
