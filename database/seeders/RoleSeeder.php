<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'usuario']);

        $permission = Permission::create(['name' => 'admin'])->assignRole($role1);

        $permission = Permission::create(['name' => 'reportes.index'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'reportes.create'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'reportes.edit'])->syncRoles([$role1]);
        $permission = Permission::create(['name' => 'reportes.destroy'])->syncRoles([$role1]);
    }
}
