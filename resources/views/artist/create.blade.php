@extends('layouts.app')

@section('title', 'Ajouter un artiste')

@section('content')
    <h2>Ajouter un artiste</h2>
    <form action="{{ route('artist.store') }}" method="POST">
        @csrf
        <div>
            <label for="firstname">Prenom</label>
            <input type="text" name="firstname" id="firstname"

            @if (old('firstname'))
                value="{{ old('firstname')}}"
                @endif
                class="@error('firstname') is-invalid @enderror">

                @error('firstname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname"

            @if (old('lastname'))
                value="{{ old('lastname')}}"
                @endif
                class="@error('lastname') is-invalid @enderror">

                @error('lastname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>

        <button>Ajouter</button>
        <a href="{{ route('artist.index') }}">Annuler</a>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h2>Liste des erreurs de validation</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <nav><a href="{{ route('artist.index') }}">Retour à l'index</a></nav>
@endsection