<?php
namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Schema};
use Illuminate\Support\Str;
class UserTableSeeder extends Seeder {
    public function run() {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        $user = User::create([
            'name'          =>  'Mostafa Alii User',
            'email'         =>  'user@app1.com',
            'password'      =>  bcrypt('123123'),
            'status'        =>  'active',
            'phone'         =>  '123456',
            'remember_token' => Str::random(10),
        ]);
        env('APP_ENV') === 'local' ? User::factory()->count(10)->create() : $user;
        Schema::enableForeignKeyConstraints();
    }
}