<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\ImageUploadService;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, ImageUploadService $imageUploadService)
    {
        if ($request->hasFile('image')) {
            $result = $imageUploadService->uploadImage($request->image);
            if ($result === false) {
                return back()->with('swal-error', 'خطا در آپلود فایل');
            }
            $inputs['image'] = $result;
        }
        $inputs['url'] = $request->url;

        Banner::create($inputs);
        return to_route('admin.banner.index')->with('swal-success', 'Banner Successfully Created');
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
    public function edit(Banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner, ImageUploadService $imageUploadService)
    {
        $inputs = [];

        if ($request->hasFile('image')) {
            if (!empty($banner->image)) {
                $imageUploadService->removeImage($banner->image);
            }
            $result = $imageUploadService->uploadImage($request->file('image'));
            if ($result === false) {
                return back()->with('swal-error', 'خطا در آپلود فایل');
            }
            $inputs['image'] = $result;
        }

        $inputs['url'] = $request->url;

        $banner->update($inputs);

        return to_route('admin.banner.index')->with('swal-success', 'Banner Successfully Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $result = $banner->delete();
        return to_route('admin.banner.index')->with('swal-success', 'Banner Deleted');
    }
}
