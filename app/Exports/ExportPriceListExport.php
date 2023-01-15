<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportPriceListExport implements FromQuery, WithHeadings, WithMapping
{

    public function query()
    {
        return Product::query();
    }

    public function headings(): array
    {
        return [
            'product name',
            'price'
        ];
    }

    public function map($product): array
    {
        return [
            $product->name,
            $product->price
        ];
    }
}
