<?php

use Illuminate\Database\Seeder;

class DonationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donations=array(array(
            'epfnum' => 'e01',
            'reason' => 'Father',
            'amount' => 25000,
            'chequenum'=>'chequenum01',)
        ,array([
                'epfnum' => 'e02',
                'reason' => 'Father',
                'amount' => 25000,
                'chequenum'=>'chequenum02',
            ]),array([
                'epfnum' => 'e03',
                'reason' => 'Employee',
                'amount' => 50000,
                'chequenum'=>'chequenum03',
            ]),array([
                'epfnum' => 'e04',
                'reason' => 'Mother',
                'amount' => 25000,
                'chequenum'=>'chequenum04',
            ]),array([
                'epfnum' => 'e05',
                'reason' => 'Employee',
                'amount' => 50000,
                'chequenum'=>'chequenum05',
            ]),array([
                'epfnum' => 'e06',
                'reason' => 'Father',
                'amount' => 25000,
                'chequenum'=>'chequenum06',
            ]),array([
                'epfnum' => 'e07',
                'reason' => 'Father',
                'amount' => 25000,
                'chequenum'=>'chequenum07',
            ]),array([
                'epfnum' => 'e08',
                'reason' => 'Mother',
                'amount' => 25000,
                'chequenum'=>'chequenum08',
            ]),array([
                'epfnum' => 'e09',
                'reason' => 'Father',
                'amount' => 25000,
                'chequenum'=>'chequenum09',
            ]));

        foreach ($donations as $donation)
            DB::table('donations')->insert($donation);
    }
}
