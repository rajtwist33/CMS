<?php

namespace App\Http\Controllers\backend;

use App\Models\backend\Social_link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\backend\Companysetting;
use Illuminate\Support\Str;

class CompanysettingController extends Controller
{

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $setting = Companysetting::with('link')->first();
        return view('backend.pages.company_settings.create',compact('setting',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DB::beginTransaction();
        try {
            $parent =  Companysetting::updateOrCreate([
                'id'=>$request->data_id,
            ],
        [
            'logo'=>$request->logo,
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'maps'=>$request->map_links,
            'slug'=>rand(1,9999),
        ]);

        Social_link::updateOrCreate([
            'company_id'=>$request->data_id,
        ],
        [
         'company_id'=>$parent->id,
         'facebook'=>$request->facebook,
         'tiktok'=>$request->tiktok,
         'linkedin'=>$request->linkedin,
         'youtube'=>$request->youtube,
         'whatsapp'=>$request->whatsapp,
         'slug'=>Str::lower($request->name).'-'.rand(1,9999),
        ]);
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return response()->json(['error' => $ex->getMessage()], 500);
        }

       return redirect()->back();
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
    public function edit(string $id)
    {

        return view('backend.pages.company_settings.create');
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
