<?php

namespace Database\Seeders;

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
            //Tabla: roles ..........................................................................................
            $role1= Role::create(['name'=> 'Admin']);
            $role2= Role::create(['name'=> 'Editor']);
    
            //Tabla: permissions (sin syncRoles).....................................................................
            //Tabla: role_has_permissions (con syncRoles)............................................................
/*            
            Permission::create(['name'=> 'reservas.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'reservas.editar'])->syncRoles([$role1]);
            Permission::create(['name'=> 'reservas.create'])->syncRoles([$role1]);
            Permission::create(['name'=> 'reservas.destroy'])->syncRoles([$role1]);
    
            Permission::create(['name'=> 'clientes.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'clientes.edit'])->syncRoles([$role1]);
            Permission::create(['name'=> 'clientes.create'])->syncRoles([$role1]);
            Permission::create(['name'=> 'clientes.destroy'])->syncRoles([$role1]);
    
    
            Permission::create(['name'=> 'pensiones.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'pensiones.edit'])->syncRoles([$role1]);
            Permission::create(['name'=> 'pensiones.create'])->syncRoles([$role1]);
            Permission::create(['name'=> 'pensiones.destroy'])->syncRoles([$role1]);
    
            Permission::create(['name'=> 'servicios.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'servicios.edit'])->syncRoles([$role1]);
            Permission::create(['name'=> 'servicios.create'])->syncRoles([$role1]);
            Permission::create(['name'=> 'servicios.destroy'])->syncRoles([$role1]);
    
            Permission::create(['name'=> 'rooms.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'rooms.edit'])->syncRoles([$role1]);
    
            Permission::create(['name'=> 'roles.listado'])->syncRoles([$role1]);
            Permission::create(['name'=> 'roles.editar'])->syncRoles([$role1]);
            Permission::create(['name'=> 'roles.update'])->syncRoles([$role1]);
*/            
    }
}
