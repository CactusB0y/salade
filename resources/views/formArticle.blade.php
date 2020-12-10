@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Création d'article</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <form action="/article" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Titre de l'article</label>
                            <input type="text" name="titre" class="form-control" id="exampleFormControlInput1"
                                placeholder="titre">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Contenu de l'article</label>
                            <textarea placeholder="article" name="article" class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">publier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
