<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name' => 'huthubtest',
            'email'    => 'huthub@gmail.com',
            'contact'    => '9876543210',
            'password' => Hash::make('awesome'),
        ));
    }
}
