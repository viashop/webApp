<?php

use Control\Domains\Models\Role\Role;
use Illuminate\Database\Seeder;
use Control\Domains\Models\User\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->array_data() as $key => $arr) {

            if (User::where('email', '=', $arr['email'])->count()) {

                $data = [
                    'name' => $arr['name'],
                    'email' => $arr['email'],
                    'password' => bcrypt($arr['password']),
                    'active' => true,
                    'admin' => $arr['admin'],
                    'user' => $arr['user'],
                ];

                $user = User::where('email', '=', $arr['email'])->first();
                $user->update($data);

            } else {

                $role = Role::where('name', '=', $arr['role'])->first();

                $user = new User();
                $user->name = $arr['name'];
                $user->email = $arr['email'];
                $user->password = bcrypt($arr['password']);
                $user->active = true;
                $user->admin = $arr['admin'];
                $user->user = $arr['user'];
                $user->save();
                $user->roles()->attach($role);

            }

        }

    }

    public function array_data()
    {
        return [
            ['name' => 'Administrador','email' => 'administrador@loojas.com.br','password' => 'administrador', 'admin' => true, 'user' => false, 'role' => 'administrator'],
            ['name' => 'Auditoria','email' => 'auditoria@loojas.com.br','password' => 'auditoria', 'admin' => true, 'user' => false, 'role' => 'staff_auditor'],
            ['name' => 'Financeiro','email' => 'financeiro@loojas.com.br','password' => 'financeiro', 'admin' => true, 'user' => false, 'role' => 'staff_finance'],
            ['name' => 'Comercial','email' => 'comercial@loojas.com.br','password' => 'comercial', 'admin' => true, 'user' => false, 'role' => 'staff_commercial'],
            ['name' => 'Suporte','email' => 'suporte@loojas.com.br','password' => 'suporte', 'admin' => true, 'user' => false, 'role' => 'staff_support'],
            ['name' => 'Webmaster','email' => 'webmaster@loojas.com.br','password' => 'webmaster', 'admin' => true, 'user' => false, 'role' => 'staff_auditor'],
            ['name' => 'Admin Shop','email' => 'admin@shop.com.br','password' => 'adminshop', 'admin' => false, 'user' => true, 'role' => 'shop_admin'],
            ['name' => 'Editor Shop','email' => 'editor@shop.com.br','password' => 'editorshop', 'admin' => false, 'user' => true, 'role' => 'shop_editor'],
            ['name' => 'Cliente Shop','email' => 'cliente@shop.com.br','password' => 'clienteshop', 'admin' => false, 'user' => true, 'role' => 'shop_customer'],
        ];

    }

}
