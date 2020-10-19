<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();
    private $adminRole = null;
    private $userRole = null;
    private $subFolder = '';


    public function insertLink($name, $href, $icon, $slug, $parent_id, $menu_id, $sequence)
    {
        DB::table('menus')->insert([
            'slug' => $slug,
            'name' => $name,
            'icon' => $icon,
            'href' => $href,
            'menu_id' => $menu_id,
            'sequence' => $sequence,
            'parent_id' => $parent_id
        ]);
    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         $ php artisan migrate:refresh --seed
        # This command also rollbacks database and migrates it again.

         php artisan db:seed                        // runs the DatabaseSeeder class
         php artisan db:seed --class=MenusTableSeeder     // specify a specific seeder class to run individually:
        php artisan migrate:fresh --seed       

        */
        /* Get roles */

        DB::table('menulist')->insert(['name' => 'sidebar menu']);
        DB::table('menulist')->insert(['name' => 'top menu']);

        // $this->insertLink($name, $href, $icon, $slug, $parent_id, $menu_id, $sequence)
        $this->insertLink('Dashbaord', '/admin', 'cil-speedometer', 'link', null, 1, 1);
        $this->insertLink('Settings', '', 'cil-calculator', 'dropdown', null, 1, 2);
        $this->insertLink('Users',  '/admin/users', null, 'link', 2, 1, 1);
        $this->insertLink('Games', '/admin/games', null, 'link', 2, 1, 2);
        $this->insertLink('Leagues', '/admin/leagues', null, 'link', 2, 1, 3);
        $this->insertLink('Teams', '/admin/teams', null, 'link', 2, 1, 4);
        $this->insertLink('Players', '/admin/players', null, 'link', 2, 1, 5);
        $this->insertLink('Banners', '/admin/banners', null, 'link', 2, 1, 6);

        // $this->insertTitle('user,admin', 'Theme');
        // $this->insertLink('user,admin', 'Colors', '/colors', 'cil-drop1');
        // $this->insertLink('user,admin', 'Typography', '/typography', 'cil-pencil');

        // $this->beginDropdown('user,admin', 'Base', 'cil-puzzle');
        //     $this->insertLink('user,admin', 'Breadcrumb',    '/base/breadcrumb');
        //     $this->insertLink('user,admin', 'Cards',         '/base/cards');
        //     $this->insertLink('user,admin', 'Carousel',      '/base/carousel');
        //     $this->insertLink('user,admin', 'Collapse',      '/base/collapse');
        //     $this->insertLink('user,admin', 'Forms',         '/base/forms');
        //     $this->insertLink('user,admin', 'Jumbotron',     '/base/jumbotron');
        //     $this->insertLink('user,admin', 'List group',    '/base/list-group');
        //     $this->insertLink('user,admin', 'Navs',          '/base/navs');
        //     $this->insertLink('user,admin', 'Pagination',    '/base/pagination');
        //     $this->insertLink('user,admin', 'Popovers',      '/base/popovers');
        //     $this->insertLink('user,admin', 'Progress',      '/base/progress');
        //     $this->insertLink('user,admin', 'Scrollspy',     '/base/scrollspy');
        //     $this->insertLink('user,admin', 'Switches',      '/base/switches');
        //     $this->insertLink('user,admin', 'Tables',        '/base/tables');
        //     $this->insertLink('user,admin', 'Tabs',          '/base/tabs');
        //     $this->insertLink('user,admin', 'Tooltips',      '/base/tooltips');
        // $this->endDropdown();

        // $this->beginDropdown('user,admin', 'Buttons', 'cil-cursor');
        //     $this->insertLink('user,admin', 'Buttons',           '/buttons/buttons');
        //     $this->insertLink('user,admin', 'Buttons Group',     '/buttons/button-group');
        //     $this->insertLink('user,admin', 'Dropdowns',         '/buttons/dropdowns');
        //     $this->insertLink('user,admin', 'Brand Buttons',     '/buttons/brand-buttons');
        // $this->endDropdown();

        // $this->insertLink('user,admin', 'Charts', '/charts', 'cil-chart-pie');

        // $this->beginDropdown('user,admin', 'Icons', 'cil-star');
        //     $this->insertLink('user,admin', 'CoreUI Icons',      '/icon/coreui-icons');
        //     $this->insertLink('user,admin', 'Flags',             '/icon/flags');
        //     $this->insertLink('user,admin', 'Brands',            '/icon/brands');
        // $this->endDropdown();

        // $this->beginDropdown('user,admin', 'Notifications', 'cil-bell');
        //     $this->insertLink('user,admin', 'Alerts',     '/notifications/alerts');
        //     $this->insertLink('user,admin', 'Badge',      '/notifications/badge');
        //     $this->insertLink('user,admin', 'Modals',     '/notifications/modals');
        // $this->endDropdown();

        // $this->insertLink('user,admin', 'Widgets', '/widgets', 'cil-calculator');
        // $this->insertTitle('user,admin', 'Extras');
        // $this->beginDropdown('user,admin', 'Pages', 'cil-star');
        //     $this->insertLink('user,admin', 'Login',         '/login');
        //     $this->insertLink('user,admin', 'Register',      '/register');
        //     $this->insertLink('user,admin', 'Error 404',     '/404');
        //     $this->insertLink('user,admin', 'Error 500',     '/500');
        // $this->endDropdown();

        // $this->insertLink('guest,user,admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        // $this->insertLink('guest,user,admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');


        /* Create top menu */
        // DB::table('menulist')->insert([
        //     'name' => 'top menu'
        // ]);

        // $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        // $this->beginDropdown('guest,user,admin', 'Pages');
        // $id = $this->insertLink('guest,user,admin', 'Dashboard',    '/');
        // $id = $this->insertLink('user,admin', 'Notes',              '/notes');
        // $id = $this->insertLink('admin', 'Users',                   '/users');
        // $this->endDropdown();
        // $id = $this->beginDropdown('admin', 'Settings');

        // $id = $this->insertLink('admin', 'Edit menu',               '/menu/menu');
        // $id = $this->insertLink('admin', 'Edit menu elements',      '/menu/element');
        // $id = $this->insertLink('admin', 'Edit roles',              '/roles');
        // $id = $this->insertLink('admin', 'Media',                   '/media');
        // $id = $this->insertLink('admin', 'BREAD',                   '/bread');
        // $this->endDropdown();

        // $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
