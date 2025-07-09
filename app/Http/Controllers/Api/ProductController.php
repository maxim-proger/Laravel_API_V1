<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Format price by currency param.
     */
    public function format_price(float $price, string $currency)
    {
        switch ($currency) {
            case 'RUB':
                $currency_name = 'Р';
                $currency_rate = 1.00;
                $price = number_format(round($price * $currency_rate,2), 2, '.', ' ') . ' ' . $currency_name;
                return $price;
                break;
            case 'USD':
                $currency_name = '$';
                $currency_rate = 90.00;
                $price = $currency_name . number_format(round($price / $currency_rate,2), 2, '.', ' ');
                return $price;
                break;
            case 'EUR':
                $currency_name = '€';
                $currency_rate = 100.00;
                $price = $currency_name . number_format(round($price / $currency_rate,2), 2, '.', ' ');
                return $price;
                break;
            default:
                return $price;
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index(string $currency = '')
    {
        $products = Product::get();

        //format price by currency param
        foreach ($products as $product) {
            $product->price = $this->format_price($product->price, $currency);
        }

        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
