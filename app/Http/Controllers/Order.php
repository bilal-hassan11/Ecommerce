<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function all_order(){

        return view('admin.order.orders');
    }

    public function all_invoices(){

        return view('admin.reports.invoice');
    }

    public function all_report(){

        return view('admin.reports.reports');
    }

    public function all_taxes(){

        return view('admin.reports.taxes');
    }
}
