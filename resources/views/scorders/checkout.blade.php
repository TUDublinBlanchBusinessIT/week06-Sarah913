@extends('layouts.app')

@section('content')
<h2>Place Order</h2>

{{ Form::open(['url' => 'scorder/placeorder', 'method' => 'post']) }}
@csrf

<table class="table table-condensed table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Colour</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @php 
            $ttlCost = 0; 
            $ttlQty = 0;
        @endphp

        @foreach ($lineitems as $lineitem)
            @php 
                $product = $lineitem['product']; 
            @endphp

            <tr>
                <td>
                    <input size="3"
                           style="border:none"
                           type="text"
                           name="productid[]"
                           readonly
                           value="{{ $product->id }}">
                </td>

                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->colour }}</td>

                <td>
                    <div class="price">{{ $product->price }}</div>
                </td>

                <td>
                    <input size="3"
                           style="border:none"
                           class="qty"
                           type="text"
                           name="quantity[]"
                           readonly
                           value="{{ $lineitem['qty'] }}">
                </td>

                <td>
                    <button type="button" class="btn btn-default add">
                        <span class="glyphicon glyphicon-plus"></span>
                    </button>

                    <button type="button" class="btn btn-default subtract">
                        <span class="glyphicon glyphicon-minus"></span>
                    </button>

                    <button type="button"
                            class="btn btn-default"
                            value="remove"
                            onclick="$(this).closest('tr').remove();">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </td>
            </tr>

            @php
                $ttlQty += $lineitem['qty'];
                $ttlCost += ($product->price * $lineitem['qty']);
            @endphp
        @endforeach
    </tbody>
</table>

<button type="submit" class="btn btn-primary">Submit</button>

{{ Form::close() }}
@endsection
