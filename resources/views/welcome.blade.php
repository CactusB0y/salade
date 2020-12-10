@extends('template.main')
@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert bg-pink">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
            </div>
        @endif
        <h1>Bienvenue sur commentaire blog</h1>
    </div>
@endsection