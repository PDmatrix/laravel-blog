@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <main role="main" class="col-12 ml-sm-auto pt-3">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->title }}</td>
                            <td>
                                <a href="{{ "/admin/article/delete/{$article->id}" }}">
                                    <button
                                            type="button"
                                            class="btn btn-danger mb-2">
                                        Удалить
                                    </button>
                                </a>
                                <a href="{{ "/admin/article/{$article->id}" }}">
                                    <button
                                            type="button"
                                            class="btn btn-primary mb-2">
                                        Редактировать
                                    </button>
                                </a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ "/admin/article" }}">
                <button
                        type="button"
                        class="btn btn-primary mb-2">
                    Создать пост
                </button>
            </a>
        </main>
    </div>
@endsection