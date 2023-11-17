<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $table = "invoices";
    // public $timestamps = fales ;


    public static function create($data)
    {

        $invoices = new invoices;
        $invoices->invoice_date = $data['invoice_date'];
        $invoices->customer_code = $data['customer_code'];
        $invoices->is_approved = $data['is_approved'];
        $invoices->notes = $data['notes'];
        $invoices->discount_value = $data['discount_value'];
        $invoices->total_cost_items = $data['total_cost_items'];
        $invoices->total_befor_discount = $data['total_befor_discount'];
        $invoices->total_cost = $data['total_cost'];
        $invoices->pill_type = $data['pill_type'];
        $invoices->added_by = $data['added_by'];
        return  $invoices->save();
    }
    public static function getAll(){
        return self::all();
    }
}
