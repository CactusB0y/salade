@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Auteur</th>
                                <th scope="col">Titre</th>
                                <th scope="col"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->users->name }}</td>
                                    <td>{{ $article->titre }}</td>
                                    <td>
                                        <div class="d-flex">
                                            @can('delete-article', $article)
                                                <a class="btn btn-success mr-3" href="/article/{{$article->id}}/edit">edit</a>
                                                <form action="/article/{{$article->id}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>  
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
