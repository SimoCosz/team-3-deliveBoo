@extends('layouts.app')


@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Image</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Visibilità</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td class="product-image">{{ $product->name }}</td>
                    <td>{{ $product->cover }}</td>
                    <td>{{ $product->category }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->visibility }}</td>
                    <td>€ {{ $product->price }}</td>

                    {{-- <td>
                        <div class="btn btn-small" href="{{ route('admin.products.edit') }}">Modifica</div>
                    </td>

                    <td>
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <div type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare {{$product->title}}?'>Elimina</div>                        
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection