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
        $invoiceDetail = invoiceDetail::all;
        // $invoiceDetail = invoiceDetail::get;
        return $invoiceDetail;
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
        $invoiceDetail = new invoiceDetail();
        $invoiceDetail->invoice_id = $request->invoice_id;
        $invoiceDetail->store_id = $request->store_id;
        $invoiceDetail->item_code = $request->item_code;
        $invoiceDetail->quantity = $request->quantity;
        $invoiceDetail->unit_price = $request->unit_price;
        $invoiceDetail->total_price = $request->total_price;
        $invoiceDetail->added_by = $request->added_by;
        $invoiceDetail->save();
        return response('Successfully');
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
