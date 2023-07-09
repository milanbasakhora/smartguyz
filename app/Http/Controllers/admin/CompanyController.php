<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        return view('admin.company.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::first();
        if(!empty($company))
        {
            return redirect()->route('company.index');

        }
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $company->twitter = $request->twitter;
        $company->youtube = $request->youtube;
        $company->tiktok = $request->tiktok;
        uploadImage($request,$company,'logo');
        $company->save();
        return redirect()->route('company.index');
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
        $company = Company::find($id);
        return view('admin.company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $company = Company::find($id);
        $company->name = $request->name;
        $company->address = $request->address;
        $company->contact = $request->contact;
        $company->email = $request->email;
        $company->facebook = $request->facebook;
        $company->instagram = $request->instagram;
        $company->twitter = $request->twitter;
        $company->youtube = $request->youtube;
        $company->tiktok = $request->tiktok;
        uploadImage($request,$company,'logo');
        $company->update();
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('company.index');
    }
}
