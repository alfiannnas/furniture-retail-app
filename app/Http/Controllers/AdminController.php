<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FullCustom;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index(Request $request)
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

        $period = $request->period ?? 30;
        $validPeriods = [7, 30, 90];

        if (!in_array((int)$period, $validPeriods)) {
            $period = 30;
        }

        $today = Carbon::now();
        $startDate = $today->copy()->subDays($period)->format('Y-m-d');

        $topSelling = Order::where('status', '1')
            ->where('orders.order_status', 'Diterima')
            ->leftJoin('order_details', 'orders.id', '=', 'order_details.order_id')
            ->leftJoin('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_details.created_at', '>=', $startDate)
            ->select(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image',
                DB::raw('SUM(order_details.qty_order) as total_sold')
            )
            ->groupBy(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image'
            )
            ->orderBy('total_sold', 'desc')
            ->limit(5)
            ->get();

        $periodFilter = $request->periodFilter ?? 30;
        $validPeriods = [7, 30, 90];

        if (!in_array((int)$periodFilter, $validPeriods)) {
            $periodFilter = 30;
        }

        $startDateFilter = Carbon::now()->subDays($periodFilter);

        $topSellingFilter = Order::where('status', '1')
            ->where('orders.order_status', 'Diterima')
            ->leftJoin('order_details', 'orders.id', '=', 'order_details.order_id')
            ->leftJoin('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_details.created_at', '>=', $startDate)
            ->select(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image',
                DB::raw('SUM(order_details.qty_order) as total_sold')
            )
            ->groupBy(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image'
            )
            ->orderBy('total_sold', 'desc')
            ->limit(5)
            ->get();

        $totalSoldFilter = $topSellingFilter->sum('total_sold');
        $dataFilter = $topSellingFilter->map(function ($product) use ($totalSoldFilter) {
            $percentageFilter = $totalSoldFilter > 0 ? round(($product->total_sold / $totalSoldFilter) * 100, 2) : 0;

            return [
                'id' => $product->id,
                'name' => $product->name,
                'units' => $product->total_sold,
                'percentage' => $percentageFilter
            ];
        });

        return view('admin.index', compact('category', 'product', 'fcustom', 'dppay', 'clearpay', 'proces', 'ready', 'send', 'accept', 'free', 'ekspedisi', 'user', 'topSelling', 'period', 'dataFilter'));
    }

    public function getTopProducts($period)
    {
        $validPeriods = [7, 30, 90];

        if (!in_array((int)$period, $validPeriods)) {
            $period = 30;
        }

        $today = Carbon::now();
        $startDate = $today->copy()->subDays($period)->format('Y-m-d');

        $topSelling = Order::where('status', '1')
            ->where('orders.order_status', 'Diterima')
            ->leftJoin('order_details', 'orders.id', '=', 'order_details.order_id')
            ->leftJoin('products', 'order_details.product_id', '=', 'products.id')
            ->where('order_details.created_at', '>=', $startDate)
            ->select(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image',
                DB::raw('SUM(order_details.qty_order) as total_sold')
            )
            ->groupBy(
                'products.id',
                'products.name',
                'products.slug',
                'products.product_image'
            )
            ->orderBy('total_sold', 'desc')
            ->limit(5)
            ->get();

        $totalSold = $topSelling->sum('total_sold');

        return response()->json([
            'topSelling' => $topSelling,
            'totalSold' => $totalSold
        ]);
    }
}
