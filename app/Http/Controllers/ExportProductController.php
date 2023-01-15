<?php

namespace App\Http\Controllers;

use App\Exports\ExportPriceListExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ExportProductController extends Controller
{
    public function export(Request $request)
    {
        return Excel::download(new ExportPriceListExport(),'لائحه الاسعار.xlsx');
    }
}
