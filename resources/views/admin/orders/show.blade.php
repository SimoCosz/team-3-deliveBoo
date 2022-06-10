@extends('layouts.app')

@section('content')
<div class="container">
  @if($order->user_id == $user->id)
    <h1>Ordine di {{$order->client_name}}</h1>
    <p><span class="underline"> Indirizzo</span>: {{$order->client_address}}</p>
    <p><span class="underline"> Città</span>: {{$order->client_city}}</p>
    <p><span class="underline"> Telefono Cliente</span>: {{$order->client_phone}}</p>
    <p><span class="underline"> Email Cliente</span>: {{$order->client_email}}</p>
    <p><span class="underline"> Totale</span>: {{$order->total_price}} &euro;</p>
    @if($order->payment_state === 1)
      <p>Pagamento effettuato</p>
    @else
      <p>Pagamento alla consegna.</p>
    @endif

    <a class="btn btn-primary" href="{{route('admin.orders.index')}}">Torna alla lista ordini</a>
  @else
  <div class="not-found container">
    <div class="error">
      <h1>404</h1>
      <p>--page not found--</p>
    </div>
  </div>
  @endif
</div>
@endsection