<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class IndexController extends MasterController
{
    public function __construct()
    {
        parent::__construct(new \App\Repositories\MenusRepository(new \App\Menu()));
        $this->bar = 'right';
        $this->template = env('MASTER').'.index';
    }
    public function index()
    {
        $this->title = 'DnvMaster - Онлайн сервис домашних услуг';
        $this->keywords = 'Поиск мастеров и специалистов по выполнению задач: мастера, курьеры, фрилансеры, уборщики, грузчики, грузоперевозчики, сборщики мебели, сантехники, электрики, маляры, штукатуры, поклейщики обоев, установщики дверей';
        $this->description = 'Сервис, мастера, курьеры, фрилансеры, уборщики, грузчики, грузоперевозчики, сборщики мебели, сантехники, электрики, маляры, штукатуры, поклейщики обоев, установщики дверей ...';

        return $this->Output();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
