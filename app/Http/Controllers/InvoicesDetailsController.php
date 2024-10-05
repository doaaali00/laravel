<?php

namespace App\Http\Controllers;

use App\Models\Invoices_Details;
use App\Models\Invoices;
use App\Models\Invoices_attachments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class InvoicesDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices_Details  $invoices_Details
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $invoices = Invoices::where('id' , $id)->first();
        $details = Invoices_Details::where('id_invoice' , $id)->get();
        $attachments = Invoices_attachments::where('invoice_id' , $id)->get();

       return view('invoices.invoices_details' , compact('invoices' , 'details' , 'attachments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices_Details  $invoices_Details
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoices_Details $invoices_Details)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoices_Details  $invoices_Details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoices_Details $invoices_Details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices_Details  $invoices_Details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

    }

   
    
}
