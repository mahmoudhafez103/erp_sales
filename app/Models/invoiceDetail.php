<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoiceDetail extends Model
{
    use HasFactory;
    protected $table = "invoiceDetail";

    public static function create($data)
    {
        $invoiceDetail = new invoiceDetail;
        $invoiceDetail->invoice_id = $data['invoice_id'];
        $invoiceDetail->store_id = $data['store_id'];
        $invoiceDetail->item_code = $data['item_code'];
        $invoiceDetail->quantity = $data['quantity'];
        $invoiceDetail->unit_price = $data['unit_price'];
        $invoiceDetail->total_price = $data['total_price'];
        $invoiceDetail->added_by = $data['added_by'];
        return  $invoiceDetail->save();
    }
    public static function getAll(){
        return self::all();
    }

}
