@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-4">{{$user->name}}</h1>
      </div>
    </div>
  </div>
  <div class="container">
    <a class="btn btn-success my-3" href="{{route('admin.products.create')}}">Aggiungi un nuovo piatto</a>
    <a class="btn btn-success my-3" href="{{route('admin.orders.index')}}">Vedi ordini</a>
  </div>
  <div class="container d-flex justify-content-center">
      {{$products->links()}}
  </div>
  <div class="container table-responsive">
    <table class="table table-bordered table-hover table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col">Nome</th>
          <th scope="col" class="text-center">Image</th>
          <th scope="col" class="text-center">Categoria</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Visibilità</th>
          <th scope="col" class="text-center">Prezzo</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
          @foreach($products as $key => $product)
            <tr>
              <td class="text-center">{{ $product->id }}</td>
              <td class="">{{ $product->name }}</td>
              <td class="d-flex align-items-center justify-content-center">
                @if ($product->cover)
                <img class="w-75 h-75 rounded-circle" style="aspect-ratio:1/1" src="{{ asset('storage/'.$product->cover)}}" alt="">   
                {{-- @elseif($product->cover)
                <img class="w-75 h-75 rounded-circle" style="aspect-ratio:1/1" src="{{ $product->cover }}" alt="">    --}}
                @else
                  <img class="w-75 h-75 rounded-circle mx-auto d-block" style="aspect-ratio:1/1" src="{{URL::asset('img/segna-posto.jpg')}}" alt="">  
                @endif
              </td>
              <td class="text-capitalize">
                <span class="badge badge-pill badge-info p-2">
                  {{ $product->category }}
                </span>
              </td>
              <td>{{ $product->description }}</td>
              @if($product->visibility === 0)
                <td class="text-center">No</td>
              @else
                <td class="text-center">Si</td>
              @endif
              <td>€ {{ $product->price }}</td>

              <td>
                <a class="btn btn-small border-rounded btn-outline-primary" type='submit' href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
              </td>

              <td>
                <button type="button" class="btn btn-small border-rounder btn-outline-danger" data-toggle="modal" data-target="#exampleModal-{{$product->id}}">
                  Elimina
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal-{{$product->id}}" tabindex="-1" aria-labelledby="exampleModal-{{$product->id}}" aria-hidden="true">
                  <div class="modal-dialog  modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModal-{{$product->id}}">Sei sicuro di voler eliminare {{$product->name}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <form action="{{ route('admin.products.destroy', $product)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-small border-rounder btn-outline-danger">
                            {{$product->deleted_at ? 'Elimina definitivamente' : 'Elimina'}}
                            </button>  
                          </form>                        
                      </div>
                    </div>
                  </div>
                </div>                
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
    <div class="container d-flex justify-content-center">
      {{$products->links()}}
    </div>
  </div>
@endsection