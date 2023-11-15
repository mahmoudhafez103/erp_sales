<?php

namespace App\Http\Controllers;

use App\Models\invoiceDetail;
use App\Http\Requests\StoreinvoiceDetailRequest;
use App\Http\Requests\UpdateinvoiceDetailRequest;

class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "1";

        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinvoiceDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoiceDetail $invoiceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoiceDetail $invoiceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinvoiceDetailRequest $request, invoiceDetail $invoiceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoiceDetail $invoiceDetail)
    {
        //
    }
}
