<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MasterController extends Controller
{
    protected $title;
    protected $description;
    protected $keywords;
    protected $template;
    protected $vars = array();
    protected $contentRightBar = false;
    protected $contentLeftBar = false;
    protected $bar = 'no';

    public function __construct()
    {
        //
    }
    protected function renderOutput()
    {
        $this->vars = Arr::add($this->vars,'title',$this->title);
        $this->vars = Arr::add($this->vars,'description',$this->description);
        $this->vars = Arr::add($this->vars,'keywords',$this->keywords);
        $navigation = view(env('MASTER').'.navigation')->render();
        $this->vars = Arr::add($this->vars,'navigation',$navigation);
        $navBar = view(env('MASTER').'.navBar')->render();
        $this->vars = Arr::add($this->vars,'navBar',$navBar);
        $footer = view(env('MASTER').'.footer')->render();
        $this->vars = Arr::add($this->vars,'footer',$footer);
        return view($this->template)->with($this->vars);
    }
}
