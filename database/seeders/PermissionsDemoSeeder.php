<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Reset cached roles and permissions
                app()[PermissionRegistrar::class]->forgetCachedPermissions();

                // create permissions
                // Permission::create(['name' => 'edit articles']);
                // Permission::create(['name' => 'delete articles']);
                // Permission::create(['name' => 'publish articles']);
                // Permission::create(['name' => 'unpublish articles']);
        
                // create roles and assign existing permissions
                // $role1 = Role::create(['name' => 'writer']);
                // $role1->givePermissionTo('edit articles');
                // $role1->givePermissionTo('delete articles');
        
                $role1 = Role::create(['name' => 'user']);        
                $role2 = Role::create(['name' => 'super-admin']);
                // gets all permissions via Gate::before rule; see AuthServiceProvider
        
                // create demo users
                $user = \App\Models\User::factory()->create([
                    'name' => 'User',
                    'email' => 'user@example.com',
                    'password' =>bcrypt('password'),
                ]);
                $user->assignRole($role1);
        
               // create admin users
                $user = \App\Models\User::factory()->create([
                    'name' => 'super-admin',
                    'email' => 'superadmin@example.com',
                    'password' =>bcrypt('password'),
                ])->givePermissionTo(Permission::all());
                $user->assignRole($role2);
            
        
    }
}
