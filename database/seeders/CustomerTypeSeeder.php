<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Seeder;

class CustomerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        CustomerType::create([
            'type'=>'normal',
            'value' => 'مفرق'
        ]);
        CustomerType::create([
            'type'=>'wholesale_price',
            'value' => 'جمله'
        ]);
        CustomerType::create([
            'type'=>'traders_price',
            'value' => 'جمله الجمله'
        ]);
    }
}
