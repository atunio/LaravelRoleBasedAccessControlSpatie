<?php

namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $permissions = [ 
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
