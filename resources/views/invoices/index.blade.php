@extends('layout.index')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">invoice_date</th>
            <th scope="col">customer_code</th>
            <th scope="col">is_approved</th>
            <th scope="col">notes</th>
            <th scope="col">discount_value</th>
            <th scope="col">total_cost_items</th>
            <th scope="col">total_befor_discount</th>
            <th scope="col">total_cost</th>
            <th scope="col">pill_type</th>
            <th scope="col">added_by</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($invoices as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->invoice_date}}</td>
            <td>{{$item->customer_code}}</td>
            <td>{{$item->is_approved}}</td>
            <td>{{$item->notes}}</td>
            <td>{{$item->discount_value}}</td>
            <td>{{$item->total_cost_items}}</td>
            <td>{{$item->total_befor_discount}}</td>
            <td>{{$item->total_cost}}</td>
            <td>{{$item->pill_type}}</td>
            <td>{{$item->added_by}}</td>

        </tr>
        @endforeach
        {{ $products }}

    </tbody>
</table>
@endsection

@push('scripts')
<script></script>
@endpush