@extends('layout.index')

@section('content')


<a href="{{url('invoices')}}">Index invoices</a>
    <form method="post" action="{{ url('invoices/'.$invoices->id) }}">
        @csrf
        @method('put')
        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">invoice_date</span>
            <input type="text" name="invoice_date" value="{{$invoices->invoice_date}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('invoice_date'))
                * Please enter invoice date 
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">customer_code</span>
            <input type="text" name="customer_code" value="{{$invoices->customer_code}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('customer_code'))
                * Please enter customer code
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">is_approved</span>
            <input type="text" name="is_approved"  value="{{$invoices->is_approved}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('is_approved'))
                * is it approved ?
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">notes</span>
            <input type="text" name="notes"  value="{{$invoices->notes}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">discount_value</span>
            <input type="text" name="discount_value"  value="{{$invoices->discount_value}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('discount_value'))
                * Please enter discount value
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">total_cost_items</span>
            <input type="text" name="total_cost_items"  value="{{$invoices->total_cost_items}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('total_cost_items'))
                * Please enter total costumer items
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">total_befor_discount</span>
            <input type="text" name="total_befor_discount"  value="{{$invoices->total_befor_discount}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('total_befor_discount'))
                * Please enter total befor discount
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">total_cost</span>
            <input type="text" name="total_cost"  value="{{$invoices->total_cost}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('total_cost'))
                * Please enter total costumers
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">pill_type</span>
            <input type="text" name="pill_type"  value="{{$invoices->pill_type}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('pill_type'))
                * Please enter pill type
            @endif
        </div>

        <div class="input-group input-group-lg col-md-4">
            <span class="input-group-text" id="inputGroup-sizing-lg">added_by</span>
            <input type="text" name="added_by"  value="{{$invoices->added_by}}" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg">
            @if ($errors->has('added_by'))
                * Please enter added by who
            @endif
        </div>



        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection

@push('scripts')
    <script></script>
@endpush