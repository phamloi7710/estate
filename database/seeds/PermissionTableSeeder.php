<?php


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


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
           'contact-list',
           'contact-add',
           'contact-edit',
           'contact-delete',
           'doitac-list',
           'doitac-add',
           'doitac-edit',
           'doitac-delete',
           'duan-list',
           'duan-add',
           'duan-edit',
           'duan-delete',
           'login-admin',
           'news-list',
           'news-add',
           'news-edit',
           'news-delete',
           'gioithieu',
           'tuyendung',
           'email-config',
           'meta-seo',
           'web-info',
           'slider-list',
           'slider-add',
           'slider-edit',
           'slider-delete',
           'user-list',
           'user-add',
           'user-edit',
           'user-delete',
           'image-management',
        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}