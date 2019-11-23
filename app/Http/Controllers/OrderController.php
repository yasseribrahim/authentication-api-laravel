<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetails;

class OrderController extends Controller {

    public function index() {
        return Order::paginate();
    }
    
    public function show($id) {
        return OrderDetails::where('order_id', '=', $id)->get();
    }

    public function store(Request $request) {
        return Order::create($request->all());
    }

    public function update(Request $request, $id) {
        $article = Order::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete($id) {
        $article = Order::findOrFail($id);
        $article->delete();

        return 204;
    }

}
