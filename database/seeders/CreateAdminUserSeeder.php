<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
 {
     $user = User::create([
       'name' => 'admin',
       'email' => 'admin@gmail.com',
       'password' => bcrypt('password')
     ]);
     $role = Role::create(['name' => 'Admin']);
     $permissions = Permission::pluck('id','id')->all();
     $role->syncPermissions($permissions);
     $user->assignRole([$role->id]);
 }
}
