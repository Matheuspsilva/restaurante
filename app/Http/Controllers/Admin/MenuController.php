<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }

    public function new(){
        return view('admin.menu.store');
    }

    public function store(MenuRequest $request){
        $menuData = $request->all();
        $request->validated();
        $menu = new Menu();
        $menu->create($menuData);

        flash('Cardápio criado com sucesso')->success();
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu){
        return view('admin.menu.edit', compact('menu'));
    }

    public function update(MenuRequest $request, $id){
        $menuData = $request->all();
        $request->validated();
        $menu =  Menu::findOrFail($id);
        $menu->update($menuData);

        flash('Cardápio atualizado com sucesso')->success();
        return redirect()->route('menu.edit',['menu' => $id]);
    }

    public function delete($id){

        $menu =  Menu::findOrFail($id);
        $menu->delete();

        flash('Cardápio removido com sucesso')->success();
        return redirect()->route('menu.index');
    }


}
