<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
           'Default-role',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'role-updateuserrole',
           'role-romove-fromrole',
           'permission-list',
           'permission-create',
           'permission-edit',
           'permission-delete',
           'journalcategory-list',
           'journalcategory-create',
           'journalcategory-edit',
           'journalcategory-delete',
           'journalvolume-list',
           'journalvolume-create',
           'journalvolume-edit',
           'journalvolume-delete',
           'journalyear-list',
           'journalyear-create',
           'journalyear-edit',
           'journalyear-delete',
           'author-list',
           'author-create',
           'author-edit',
           'author-delete',

           'dashboard-list',
           'usermanagement-link',
           'staffmanagement-link',
           'academicmanagement-link',
           'nonacademicmanagement-link',
           'leavemanagement-link',
           'appraisalmanagement-link',
           'journalmanagement-link',
           'basicsettingsmanagement-link',

        ];

        foreach ($permissions as $permission) {
            $str = $permission;
            $delimiter = '-';
            $words = explode($delimiter, $str);

            foreach ($words as $word) {
                if($word == "user")
                Permission::create(['name' => $permission,'title'=>"User Management"]);

                if($word == "role")
                Permission::create(['name' => $permission,'title'=>"Role Management"]);

                if($word == "permission")
                Permission::create(['name' => $permission,'title'=>"Permission Management"]);

                if($word == "dashboard")
                Permission::create(['name' => $permission,'title'=>"Dashboard Pages"]);

                if($word == "journalcategory")
                Permission::create(['name' => $permission,'title'=>"Journal Category Management"]);


                if($word == "author")
                Permission::create(['name' => $permission,'title'=>"Author Management"]);

                if($word == "journalvolume")
                Permission::create(['name' => $permission,'title'=>"Journal Volume Management"]);

                if($word == "journalyear")
                Permission::create(['name' => $permission,'title'=>"Journal Year Management"]);


                if($word == "usermanagement")
                Permission::create(['name' => $permission,'title'=>"User Management Link"]);

                if($word == "staffmanagement")
                Permission::create(['name' => $permission,'title'=>"Staff Management Link"]);

                if($word == "academicmanagement")
                Permission::create(['name' => $permission,'title'=>"Academic Management Link"]);

                if($word == "nonacademicmanagement")
                Permission::create(['name' => $permission,'title'=>"Non academic Management Link"]);

                if($word == "leavemanagement")
                Permission::create(['name' => $permission,'title'=>"Leave Management Link"]);

                if($word == "appraisalmanagement")
                Permission::create(['name' => $permission,'title'=>"Appraisal Management Link"]);

                if($word == "journalmanagement")
                Permission::create(['name' => $permission,'title'=>"Journal Management Link"]);

                if($word == "basicsettingsmanagement")
                Permission::create(['name' => $permission,'title'=>"Basic Settings Management Link"]);


            }
            //  Permission::create(['name' => $permission]);
        }
    }
}
