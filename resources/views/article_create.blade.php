@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <main role="main" class="col-12 ml-sm-auto col-md-10 pt-3">
            <h1>Создать пост</h1>
            <div class="col-9">
                @if(isset($success) && $success)
                    <div class="alert alert-success" role="alert">
                        Запись успешно добавлена!
                    </div>
                @endif
                <form method="post" action="{{ route('create_article') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Заголовок</label>
                        <input type="text" class="form-control" id="id_title" name="title"
                               aria-describedby="title" placeholder="Введите заголовок">
                    </div>
                    <div class="form-group">
                        <label for="content">Содержание</label>
                        <textarea class="form-control" id="id_content" rows="3" name="content"
                                  placeholder="Введите содержание"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tags">Тэги</label>
                        <input type="text" class="form-control" id="id_tags" name="tags"
                               aria-describedby="tags" placeholder="Введите тэги через запятую">
                    </div>
                    <div class="form-group">
                        <label for="photo">Фото</label>
                        <input type="file" class="form-control" id="id_photo" name="photo"
                               aria-describedby="photo">
                    </div>
                    <button type="submit" class="btn btn-primary">Создать пост</button>
                </form>
            </div>
        </main>
    </div>
@endsection