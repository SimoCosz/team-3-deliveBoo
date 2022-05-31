@extends('layouts.app')

@section('content')
<div class="container">
  <figure class="edit__cover">
    <img src="{{$product->cover}}" alt="">
  </figure>
  <form action="{{route('admin.products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- VISIBILITY --}}
    <div class="form-group">
      <label for="visibility">Visibilità</label>
        <select class="form-control" name="visibility" id="visibility">
          <option value="">-- Nessuna --</option>
          <option {{ old('1', $product->visibility) == '1'? 'selected' : '' }} value="1">Visibile</option>
          <option {{ old('0', $product->visibility) == '0'? 'selected' : '' }} value="0">Non visibile</option>
        </select>
    </div>
    @error('visibility')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
    {{-- NAME --}}
    <div class="mb-3">
      <label for="name" class="form-label"> Nome </label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" value=" {{old('name')?: $product->name}} " name="name" id="name">
      @error('name')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
    {{-- DESCRIPTION --}}
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3"> {{old('description')?: $product->description}} </textarea>
      @error('description')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
    {{-- PRICE --}}
    <div class="mb-3">
      <label for="price" class="form-label"> Prezzo </label>
      <input type="text" class="form-control @error('price') is-invalid @enderror" value=" {{old('price')?: $product->price}} " name="price" id="price">
      @error('price')
          <div class="invalid-feedback"> {{$message}} </div>
      @enderror
    </div>
    {{-- COVER --}}
    <label class="d-block" for="cover">Inserisci immagine piatto</label>
    <input class="d-block my-3 @error('cover') is-invalid @enderror" type="file" name="cover" id="cover">
    @error('cover')
        <div class="invalid-feedback"> {{$message}} </div>
    @enderror
    {{-- CATEGORIES --}}
    {{-- <label class="text-center container">Categorie</label>
    <div class="d-flex flex-wrap container align-items-center" style="gap:1rem">
        @foreach ($categories as $key => $category)
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input @error('categories.{{$key}}') is-invalid @enderror" value="{{$category->id}}" name="categories[{{$key}}]" id="categories-{{$category->id}}">
                <label class="form-check-label" for="categories-{{$category->id}}">{{$category->name}}</label>
            </div>
        @endforeach
    </div>
    @error('categories')
        <span class="text-danger">{{ $message . 'min 1' }}</span>
    @enderror --}}
    <button class="btn btn-primary d-inline" type="submit">Conferma Modifica</button>
    <a class="btn btn-small border rounded d-inline" type='submit' href="{{ route('admin.users.index') }}">Torna alla lista prodotti</a>
  </form>

@endsection