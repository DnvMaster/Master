<?php

namespace App\Http\Controllers;

use Menu;
use App\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MasterController extends Controller
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $menus_repository;
    protected $template;
    protected $vars = array();
    protected $contentRightBar = false;
    protected $contentLeftBar = false;
    protected $bar = 'no';

    public function __construct(MenusRepository $menus_repository)
    {
        $this->menus_repository = $menus_repository;
    }
    protected function Output()
    {
        $this->vars = Arr::add($this->vars,'title',$this->title);
        $this->vars = Arr::add($this->vars,'description',$this->description);
        $this->vars = Arr::add($this->vars,'keywords',$this->keywords);

        $menu = $this->menu();

        $navigation = view(env('MASTER').'.navigation')->with('menu',$menu)->render();
        $this->vars = Arr::add($this->vars,'navigation',$navigation);

        return view($this->template)->with($this->vars);
    }
    public function menu()
    {
        $menu = $this->menus_repository->get();
        $mBuilder = Menu::make('Navigation', function($m) use($menu) {
            foreach($menu as $item) {
                if($item->parent == 0) {
                    $m->add($item->title,$item->way)->id($item->id);
                }
            }
        });
        return $mBuilder;
    }
}
