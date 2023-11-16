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
        $inputs =  $request->all();
        $invoice_id = Invoice::create($inputs);
        return redirect('invoices');
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
    public function update(UpdateinvoiceRequest $request, invoice $invoice)
    {
        $inputs =  $request->all();
        Invoice::updateInvoice($invoice, $inputs);
        return redirect('products');
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
