@extends("layout")

@section("content")
    <div class="sub-title">
        <h2>Мой блог</h2>
        <a href="/contact"><i class="icon-envelope"></i></a>
    </div>


    <!-- Subscribe Form Start -->
    <div class="col-md-8 col-md-offset-2">
        <form id="form" method="post" action={{ route("tags") }}>
            @csrf
            <div class="subscribe-form margin-top-20">
                <input name="tags" id="tags" placeholder="Тег" class="text-input">
                <button class="submit-btn" type="submit">Поиск</button>
            </div>
            <label for="tags" class="label"></label>
        </form>

    </div>
    <!-- Subscribe Form End -->

    <div class="col-md-12 content-page">
        @foreach($articles as $article)
            <div class="col-md-12 blog-post">
                <div class="post-image">
                    <img alt="img" src={{ asset("storage/{$article->img_path}") }}>
                </div>
                <div class="post-title">
                    <a href={{"/single/{$article->id}"}}><h1>{{ $article->title }}</h1></a>
                </div>
                <div class="post-tags">
                    <h5>
                        Тэги
                        @foreach($article->tags as $tag)
                            {{ $tag->name }}
                        @endforeach
                    </h5>
                </div>
            </div>
        @endforeach
        {{ $articles->links() }}
    </div>
@endsection()

