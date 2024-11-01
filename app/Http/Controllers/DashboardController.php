<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function categories()
    {
        return view('dashboard.products.category.categories');
    }

    public function products()
    {
       return view('dashboard.products.product.products');
    }

    public function productCreate()
    {
       return view('dashboard.products.product.product_create');
    }


    public function variations()
    {
        return view('dashboard.products.variations.variations');
    }

    public function brands()
    {
        return view('dashboard.products.brand.brands');
    }

    public function units()
    {
        return view('dashboard.products.units.units');
    }

    public function baseUnits()
    {
        return view('dashboard.products.base_units.base_units');
    }

    public function printBarcode()
    {
        return view('dashboard.products.barcode.print_parcode');
    }

    public function adjustments()
    {
        return view('dashboard.adjustment.adjustments');
    }

    public function adjustmentCreate()
    {
        return view('dashboard.adjustment.adjustment_create');
    }


}
