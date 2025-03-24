@extends('layouts.default')

@section('conteudo')

<div class="flex-center position-ref full-height">
    <div class="categories-container">
        <div class="spaced-contend">
            <h1>Categorias</h1>
            @if(session('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sucesso!</strong> {{ session('msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <a href="{{url('categorias/cadastrar')}}">
                <button type="button" class="btn btn-success btn-sm">+ Adicionar</button>
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            @forelse ($categories as $category)
            <tbody>
                <tr class="table-light">
                    <th scope="row">
                        {{$category->id}}
                    </th>
                    <td scope="row">
                        {{$category->name}}
                    </td>
                    <td scope="row">
                        {{isset($category->description) ? $category->description : '-'}}
                    </td>
                    <td scope="row">
                        <a href="{{url("categorias/$category->id/edit")}}">
                            <button class="btn btn-info btn-sm">Editar</button>
                        </a>
                        <form action="/categorias/{{$category->id}}/delete" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja apagar esse registro?')">Deletar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @empty
        </table>
        Não encontramos registros.
        @endforelse
    </div>
</div>
@stop