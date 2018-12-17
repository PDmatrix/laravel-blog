@extends("layout")

@section("content")
    <div class="sub-title">
        <h2>My Blog</h2>
        <a href="/contact"><i class="icon-envelope"></i></a>
    </div>


    <!-- Subscribe Form Start -->
    <div class="col-md-8 col-md-offset-2">
        <form id="mc-form" method="post" action="">

            <div class="subscribe-form margin-top-20">
                <input id="mc-email" placeholder="Тег" class="text-input">
                <button class="submit-btn" type="submit">Поиск</button>
            </div>
            <label for="mc-email" class="mc-label"></label>
        </form>

    </div>
    <!-- Subscribe Form End -->

    <div class="col-md-12 content-page">
        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
            <div class="post-image">
                <img src="images/blog/1.jpg" alt="">
            </div>
            <div class="post-title">
                <a href="/single"><h1>Make mailchimp singup form working with ajax using jquery
                        plugin</h1></a>
            </div>
        </div>
        <!-- Blog Post End -->

        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
            <div class="post-image">
                <img src="images/blog/1.jpg" alt="">
            </div>
            <div class="post-title">
                <a href="/single"><h1>Make mailchimp singup form working with ajax using jquery
                        plugin</h1></a>
            </div>
        </div>
        <!-- Blog Post End -->

        <!-- Blog Post Start -->
        <div class="col-md-12 blog-post">
            <div class="post-image">
                <img src="images/blog/1.jpg" alt="">
            </div>
            <div class="post-title">
                <a href="/single"><h1>Make mailchimp singup form working with ajax using jquery
                        plugin</h1></a>
            </div>
        </div>
        <!-- Blog Post End -->


    </div>
@endsection()

