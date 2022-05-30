@extends('layouts.app')

@section('content')
<div class="container table-responsive">
  <table class="table table-bordered table-hover table-striped">
    <thead class="thead-dark">
      <th scope="col" class="text-center"> Nome e Cognome </th>
      <th scope="col" class="text-center"> Data creazione </th>
      <th scope="col" class="text-center"> Pagamento </th>
      <th scope="col" class="text-center"></th>
    </thead>
    <tbody>
      @foreach ($orders as $order)
      <tr>
        <td class="text-center"> {{$order->client_name}} {{$order->client_surname}} </td>
        <td class="text-center"> {{$order->created_at}} </td>
        <td class="text-center border">
          @if($order->payment_state == 1)
            <span class="border rounded rounded-pill py-1 px-2">pagato</span>
          @else
          <span class="border rounded rounded-pill py-1 px-2">In sospeso</span>
          @endif
        </td>
        <td class="text-center">
          <a class="btn btn-success" href="{{-- {{route('admin.orders.show')}} --}}">Visualizza Ordine</a> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection