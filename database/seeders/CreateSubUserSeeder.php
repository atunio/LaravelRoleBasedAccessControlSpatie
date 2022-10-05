<?php
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateSubUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Aftab', 
            'email' => 'user@mis.com',
            'password' => bcrypt('123456')
        ]); 
        $role = Role::create(['name' => 'Sub User']); 
        $permissions = Permission::pluck('id','id')->all(); 
        $role->syncPermissions($permissions); 
        $user->assignRole([$role->id]);
    }
}