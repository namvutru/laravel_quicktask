<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'nam123',
            'firstname'=>'luu',
            'lastname'=>'nam',
            'email'	=>'nam@gmail.com',
            'password'=>'12345',
            'isadmin'=>1,
            'isactive'=>1,
            'created_at'=>	Carbon::now('Asia/Ho_Chi_Minh'),
            'updated_at'=>	Carbon::now('Asia/Ho_Chi_Minh')

        ]);

        User::factory()->count(10)->create();
    }
}
