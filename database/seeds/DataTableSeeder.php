<?php

use Illuminate\Database\Seeder;

class DataTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Data::class, 10)->create()->each(function($data) {
            if (($data->id % 2) == 0) {
                $data->update(['access' => true]);
            } else {
                $data->update(['access' => false]);
            }
        });
    }

}
