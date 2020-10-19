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

        // $this->insertTitle('admin', 'Theme');
        // $this->insertLink('admin', 'Colors', '/colors', 'cil-drop1');
        // $this->insertLink('admin', 'Typography', '/typography', 'cil-pencil');

        // $this->beginDropdown('admin', 'Base', 'cil-puzzle');
        //     $this->insertLink('admin', 'Breadcrumb',    '/base/breadcrumb');
        //     $this->insertLink('admin', 'Cards',         '/base/cards');
        //     $this->insertLink('admin', 'Carousel',      '/base/carousel');
        //     $this->insertLink('admin', 'Collapse',      '/base/collapse');
        //     $this->insertLink('admin', 'Forms',         '/base/forms');
        //     $this->insertLink('admin', 'Jumbotron',     '/base/jumbotron');
        //     $this->insertLink('admin', 'List group',    '/base/list-group');
        //     $this->insertLink('admin', 'Navs',          '/base/navs');
        //     $this->insertLink('admin', 'Pagination',    '/base/pagination');
        //     $this->insertLink('admin', 'Popovers',      '/base/popovers');
        //     $this->insertLink('admin', 'Progress',      '/base/progress');
        //     $this->insertLink('admin', 'Scrollspy',     '/base/scrollspy');
        //     $this->insertLink('admin', 'Switches',      '/base/switches');
        //     $this->insertLink('admin', 'Tables',        '/base/tables');
        //     $this->insertLink('admin', 'Tabs',          '/base/tabs');
        //     $this->insertLink('admin', 'Tooltips',      '/base/tooltips');
        // $this->endDropdown();

        // $this->beginDropdown('admin', 'Buttons', 'cil-cursor');
        //     $this->insertLink('admin', 'Buttons',           '/buttons/buttons');
        //     $this->insertLink('admin', 'Buttons Group',     '/buttons/button-group');
        //     $this->insertLink('admin', 'Dropdowns',         '/buttons/dropdowns');
        //     $this->insertLink('admin', 'Brand Buttons',     '/buttons/brand-buttons');
        // $this->endDropdown();

        // $this->insertLink('admin', 'Charts', '/charts', 'cil-chart-pie');

        // $this->beginDropdown('admin', 'Icons', 'cil-star');
        //     $this->insertLink('admin', 'CoreUI Icons',      '/icon/coreui-icons');
        //     $this->insertLink('admin', 'Flags',             '/icon/flags');
        //     $this->insertLink('admin', 'Brands',            '/icon/brands');
        // $this->endDropdown();

        // $this->beginDropdown('admin', 'Notifications', 'cil-bell');
        //     $this->insertLink('admin', 'Alerts',     '/notifications/alerts');
        //     $this->insertLink('admin', 'Badge',      '/notifications/badge');
        //     $this->insertLink('admin', 'Modals',     '/notifications/modals');
        // $this->endDropdown();

        // $this->insertLink('admin', 'Widgets', '/widgets', 'cil-calculator');
        // $this->insertTitle('admin', 'Extras');
        // $this->beginDropdown('admin', 'Pages', 'cil-star');
        //     $this->insertLink('admin', 'Login',         '/login');
        //     $this->insertLink('admin', 'Register',      '/register');
        //     $this->insertLink('admin', 'Error 404',     '/404');
        //     $this->insertLink('admin', 'Error 500',     '/500');
        // $this->endDropdown();

        // $this->insertLink('guest,admin', 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download');
        // $this->insertLink('guest,admin', 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers');


        /* Create top menu */
        // DB::table('menulist')->insert([
        //     'name' => 'top menu'
        // ]);

        // $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        // $this->beginDropdown('guest,admin', 'Pages');
        // $id = $this->insertLink('guest,admin', 'Dashboard',    '/');
        // $id = $this->insertLink('admin', 'Notes',              '/notes');
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
