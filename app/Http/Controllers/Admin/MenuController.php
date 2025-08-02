<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = Menu::all();
        return view('admin.menu.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = $request->validated();
        Menu::create($menu);
        return to_route('admin.menu.index')->with('swal-success', 'Menu has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        // $menus = Menu::all();
        $menus = Menu::all();
        return view('admin.menu.edit', compact('menu', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreMenuRequest $request, Menu $menu)
    {
        $inputs = $request->validated();
        $menu->update($inputs);
        return to_route('admin.menu.index')->with('swal-success', 'Menu Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $result = $menu->delete();
        return to_route('admin.menu.index')->with('swal-success', 'Menu Deleted');
    }
}
