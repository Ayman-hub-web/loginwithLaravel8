<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role::factory()->times(10)->create();
        //Anstatt dass man durch factory zufällige roles erstellt, macht man exackte roles wie folgt:
        DB::table('roles')->insert([
            'name' => 'Admin'
        ]);
        DB::table('roles')->insert([
            'name' => 'Author'
        ]);
        DB::table('roles')->insert([
            'name' => 'User'
        ]);
    }
}
