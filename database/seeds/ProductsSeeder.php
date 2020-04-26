<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
	public function run()
    {
        DB::table('products')->insert(
		[
		'name' => 'tv 1',
		'description' => 'tv 1',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 39999
		]);
		DB::table('products')->insert(
		[
		'name' => 'tv 2',
		'description' => 'tv 2',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 59999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'tv 3',
		'description' => 'tv 3',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 99999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'tv 4',
		'description' => 'tv 4',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 13999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'tv 5',
		'description' => 'tv 5',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 57999.00
		]);
		DB::table('products')->insert(
		[
		'name' => 'tv 6',
		'description' => 'tv 6',
		'photo' => 'https://techport-st.cdn.ngenix.net/_mod_files/ce_images/eshop/p1088448-0mw.jpg',
		'price' => 42999.00
		]);

    }
}
