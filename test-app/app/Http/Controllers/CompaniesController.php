<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompaniesRequest;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CompaniesRequest $request
     * @return void
     */
    public function store(CompaniesRequest $request)
    {
        $company = Company::create($request->all());
        $request->session()->flash('success', "Company {$company->name} created!");
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company $company
     * @return void
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CompaniesRequest $request
     * @param  \App\Models\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompaniesRequest $request, Company $company)
    {
        $company->update($request->all());
        $request->session()->flash('success', "Company {$company->name} updated!");
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param  \App\Models\Company $company
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Request $request, Company $company)
    {
        $request->session()->flash('error', "Company {$company->name} deleted!");
        $company->delete();
        return redirect()->route('companies.index');
    }
}
