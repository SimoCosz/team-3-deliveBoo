@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- NAME --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}*</label>
                            <div class="col-md-6">
                                <input id="name" required minlength="3" maxlength="80" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- ADDRESS --}}
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}*</label>
                            <div class="col-md-6">
                                <input id="address" required minlength="3" maxlength="100" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- CITY --}}
                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Città') }}*</label>
                            <div class="col-md-6">
                                <input id="city" required minlength="3" maxlength="100" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" autocomplete="city" autofocus>
                                @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- PHONE --}}
                        <div class="form-group row">
                            <label for="telephone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}*</label>
                            <div class="col-md-6">
                                <input id="telephone_number" required minlength="6" maxlength="15" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" autocomplete="telephone_number" autofocus>
                                @error('telephone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- P.IVA --}}
                        <div class="form-group row">
                            <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('P. iva') }}*</label>
                            <div class="col-md-6">
                                <input id="p_iva" required minlength="11" maxlength="11" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ old('p_iva') }}" autocomplete="p_iva" autofocus>
                                @error('p_iva')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- COVER --}}
                        <div class="form-group row">
                            <label for="cover" class="col-md-4 col-form-label text-md-right">{{ __('Immagine di copertina') }}</label>
                            <div class="col-md-6">
                                <input id="cover" type="file" accept="image/*" class=" @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}" autocomplete="cover" autofocus>
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- EMAIL --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}*</label>
                            <div class="col-md-6">
                                <input id="email" required type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- PASSWORD --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}*</label>
                            <div class="col-md-6">
                                <input id="password" required minlength="8" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- PASSWORD-CONFIRM --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" required minlength="8" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        {{-- CATEGORIES --}}
                        <label class="text-center container">Categorie</label>
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
                        @enderror

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
