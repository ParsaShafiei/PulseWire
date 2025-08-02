<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

class WebSetting extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = SiteSetting::first();

        return view('admin.siteSetting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ImageUploadService $ImageUploadService)
    {
        $siteSetting = SiteSetting::first();

        $inputs = [
            'title' => $request->title,
            'description' => $request->description,
            'keywords' => $request->keywords,
        ];

        if ($request->hasFile('logo') || $request->hasFile('icon')) {
            if (!empty($siteSetting->logo)) {
                $ImageUploadService->removeImage($siteSetting->logo);
            }
            if (!empty($siteSetting->icon)) {
                $ImageUploadService->removeImage($siteSetting->icon);
            }

            if ($request->hasFile('logo')) {
                $inputs['logo'] = $ImageUploadService->uploadImage($request->file('logo'), 'logo');
            }

            if ($request->hasFile('icon')) {
                $inputs['icon'] = $ImageUploadService->uploadImage($request->file('icon'), 'icon');
            }
        }

        if ($siteSetting) {
            $siteSetting->update($inputs);
        } else {
            SiteSetting::create($inputs);
        }

        return to_route('admin.websetting.index')->with('swal-success', 'Site Settings Has Been Changed');
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
    public function edit()
    {
        $settings = SiteSetting::first();
        // dd($settings);
        return view('admin.siteSetting.set', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
