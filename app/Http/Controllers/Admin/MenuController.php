<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Restaurant;

class MenuController extends Controller
{
    public function index(){
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }

    public function new(){
        $restaurants = Restaurant::all(['id','name']);
        return view('admin.menu.store', compact('restaurants'));
    }

    public function store(MenuRequest $request){

        $menuData = $request->all();
        $request->validated();

        // $menu = new Menu();
        // $menu->create($menuData);

        $restaurant = Restaurant::find($menuData['restaurant_id']);
        $restaurant->menus()->create($menuData);

        flash('Cardápio criado com sucesso')->success();
        return redirect()->route('menu.index');
    }

    public function edit(Menu $menu){
        $restaurants = Restaurant::all(['id','name']);

        return view('admin.menu.edit', compact('menu','restaurants'));
    }

    public function update(MenuRequest $request, $id){
        $menuData = $request->all();
        $request->validated();

        $menu =  Menu::findOrFail($id);
        $menu->restaurant()->associate($menuData['restaurant_id']);
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
