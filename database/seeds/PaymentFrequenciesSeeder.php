<?php

use Illuminate\Database\Seeder;
use App\Models\PaymentFrequency;

class PaymentFrequenciesSeeder extends Seeder
{
    /**
     * Payment frequencies.
     *
     * @var array
     */
    protected $paymentFrequency = [
        ['name' => 'DAILY', 'description' => 'Daily payment'],
        ['name' => 'WEEKLY', 'description' => 'Weekly payment'],
        ['name' => 'BIWEEKLY', 'description' => 'Biweekly payment'],
        ['name' => 'MONTHLY', 'description' => 'Monthly payment'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_walk($this->paymentFrequency, [PaymentFrequency::class, 'create']);
    }
}
