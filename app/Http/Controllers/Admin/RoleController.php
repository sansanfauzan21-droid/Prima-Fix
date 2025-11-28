<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    private $permissionNameTranslations = [
        'view dashboard' => 'Lihat Dashboard',
        'manage users' => 'Kelola Users',
        'manage roles' => 'Kelola Roles',
        'manage content' => 'Kelola Konten',
        'view reports' => 'Lihat Laporan',
        'manage settings' => 'Kelola Pengaturan',
    ];

    public function index()
    {
        $roles = Role::with('permissions')->paginate(10);

        // Map each role's permissions to translated names
        $roles->getCollection()->transform(function ($role) {
            $role->translated_permissions = $role->permissions->map(function ($permission) {
                return $this->permissionNameTranslations[$permission->name] ?? $permission->name;
            })->toArray();
            return $role;
        });

        return view('admin.roles.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all()->map(function ($permission) {
            $permission->translated_name = $this->permissionNameTranslations[$permission->name] ?? $permission->name;
            return $permission;
        });
        return view('admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name'],
            'permissions' => ['required', 'array'],
        ]);

        $role = Role::create(['name' => $data['name']]);
        $role->syncPermissions($data['permissions']);

        return redirect()->route('admin.roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all()->map(function ($permission) {
            $permission->translated_name = $this->permissionNameTranslations[$permission->name] ?? $permission->name;
            return $permission;
        });
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        return view('admin.roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }

    public function update(Request $request, Role $role)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name,' . $role->id],
            'permissions' => ['required', 'array'],
        ]);

        $role->name = $data['name'];
        $role->save();

        $role->syncPermissions($data['permissions']);

        return redirect()->route('admin.roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('success', 'Role deleted successfully.');
    }
}
