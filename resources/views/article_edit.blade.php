@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <main role="main" class="col-12 ml-sm-auto col-md-10 pt-3">
            <h1>Редактировать пост</h1>
            <div class="col-9">
                <form method="post" action="{{ route('ad_edit_post') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input name="id" type="hidden" value="{{ $article->id }}">
                        <label for="name">Заголовок</label>
                        <input type="text" class="form-control" id="id_title" name="title"
                               aria-describedby="title" placeholder="Введите заголовок"
                               value="{{ $article->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Содержание</label>
                        <textarea class="form-control" id="id_content" rows="3" name="content"
                                  placeholder="Введите содержание">
                            {{ $article->content }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Редактировать пост</button>
                </form>
            </div>
        </main>
    </div>
@endsection