<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function get_table()
    {
        return view('halaman.table');
    }

    public function get_dataTable()
    {
        return view('halaman.data-table');
    }
}
