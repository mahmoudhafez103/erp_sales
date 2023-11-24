<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Http\Requests\StoreinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;

class InvoiceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = invoice::getAll();
        return view('invoices::index', ['invoices' => $invoices]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('invoices::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreinvoiceRequest $request)
    {

        // invoice::create(
        //     $request->all()
        // );

        $invoice = new invoice();
        $invoice->invoice_date = $request->invoice_date;
        $invoice->customer_code = $request->customer_code;
        $invoice->is_approved = $request->is_approved;
        $invoice->notes = $request->notes;
        $invoice->discount_value = $request->discount_value;
        $invoice->total_cost_items = $request->total_cost_items;
        $invoice->total_befor_discount = $request->total_befor_discount;
        $invoice->total_cost = $request->total_cost;
        $invoice->pill_type = $request->pill_type;
        $invoice->added_by = $request->added_by;
        $invoice->save();
        return response('Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(invoice $invoice)
    {
        return view('invoices::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoice $invoice)
    {
        $invoice = Invoice::getInvoice($invoice);
        return view('invoices::edit', compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateinvoiceRequest $request)
    {
        $inputs =  $request->all();
        // Invoice::updateInvoice( $inputs);
        // return redirect('products');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoice $invoice)
    {

        Invoice::deletInvoice($invoice);
        return redirect('invoices');
    }
}
