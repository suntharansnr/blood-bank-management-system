<?php
namespace Database\Seeders;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
                     'role-list',
                     'role-create',
                     'role-edit',
                     'role-delete',

                     'product-list',
                     'product-create',
                     'product-edit',
                     'product-delete',

                     'donation-list',
                     'donation-create',
                     'donation-edit',
                     'donation-delete',

                     'donor-list',
                     'donor-create',
                     'donor-edit',
                     'donor-delete',

                     'hospital-list',
                     'hospital-create',
                     'hospital-edit',
                     'hospital-delete',

                     'profile-list',
                     'profile-create',
                     'profile-edit',
                     'profile-delete',

                     'request-list',
                     'request-create',
                     'request-edit',
                     'request-delete',

                     'user-list',
                     'user-create',
                     'user-edit',
                     'user-delete'
                     ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
