@extends('layouts.master')

@section('title', 'Categorias - Delicada Mulher')

@section('content')

    <main class="admin-table">

        <section>
            <div class="container">
                <a class="waves-effect waves-light btn-large"
                   href="/admin/category/create">Nova Categoria</a>
            </div>
            <table class="striped centered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th><i class="fa fa-camera" aria-hidden="true"></i></th>
                    <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td style="width:25%;">{{$category->name}}</td>
                        <td style="width:25%;">{{$category->description}}</td>
                        <td style="width:25%;">
                            <img  src="{{asset($category->image)}}"
                                  alt="{{$category->name}}"/>
                        </td>
                        <td style="width:25%;">
                            <a href="/admin/category/edit/{{$category->id}}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a onclick="return confirm('Você tem certeza que quer ' +
                             'deletar esta categoria?');"
                               href="/admin/category/delete/{{$category->id}}">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </section>
    </main>

@endsection
