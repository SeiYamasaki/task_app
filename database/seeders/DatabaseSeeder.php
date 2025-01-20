<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //シーダークラス呼び出し処理
        if (config('app.env') == 'local') {
            $this->call(TaskSeeder::class);
        }
    }
}
