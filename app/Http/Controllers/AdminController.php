<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FullCustom;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shipment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $category = Category::where('name', '!=', null)->count();
        $product = Product::where('name', '!=', null)->count();
        $fcustom = FullCustom::where('status', 1)->count();
        $dppay = Order::where('status', 1)->where('payment_status', 'DP 50%')->count();
        $clearpay = Order::where('status', 1)->where('payment_status', 'Lunas')->count();
        $proces = Order::where('status', 1)->where('order_status', 'Diproses')->count();
        $ready = Order::where('status', 1)->where('order_status', 'Jadi')->count();
        $send = Order::where('status', 1)->where('order_status', 'Dikirim')->count();
        $accept = Order::where('status', 1)->where('order_status', 'Diterima')->count();
        $free = Order::where('shipping_method', 'Gratis Pengiriman')->count();
        $ekspedisi = Order::where('shipping_method', 'Ekspedisi')->count();
        $user = User::where('roles', 'user')->count();
        $topSelling = Order::with(['orderDetail', 'orderDetail.product'])
            ->where('status', '1')
            ->where('order_status', 'Diterima')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
            ->select('products.*', DB::raw('SUM(order_details.qty_order) as total_sold'))
            ->groupBy('products.id')
            ->orderBy('total_sold', 'desc')
            ->limit(5)
            ->get();

        return view('admin.index', compact('category', 'product', 'fcustom', 'dppay', 'clearpay', 'proces', 'ready', 'send', 'accept', 'free', 'ekspedisi', 'user', 'topSelling'));
    }
}
