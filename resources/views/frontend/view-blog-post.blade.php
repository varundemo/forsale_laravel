@include('frontend.header')

<div class="container-fluid" style="margin-top: 180px;">
    <div class="row">
        <section class="white_bg_section">
            <h1 class="text-center container">Real Estate Articles/Knowledge</h1>

            <div class="container">
                <hr>
                <!-- Page Content -->
                <div class="container">
                    <div class="row">
                        <!-- Post Content Column -->
                        <div class="col-lg-8">
                            <a href="/articles-knowledge">
                                <h6 class="mt-4 heading_text_color"><i class="fa fa-arrow-left"></i> All Posts</h6>
                            </a>
                            <!-- Title -->
                            <h2 class="mt-4 heading_text_color">{{ $blogPost->title }}</h2>
                            <!-- Author -->
                            <p class="text-muted h6">
                                {{ date('F d, Y', strtotime($blogPost->created_at)) }}
                            </p>

                            <hr>

                            <div class="post_content" id="post_content">
                                <!-- Post Content -->
                                {!! $blogPost->post_content !!}
                            </div>

                            <hr>
                            <div class="my-3">
                                <strong>Share this post:</strong>
                                &nbsp;
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::to('/') }}/articles-knowledge/{{ $blogPost->id }}"
                                   onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ URL::to('/') }}/articles-knowledge/{{ $blogPost->id }}',
                                     'newwindow',
                                     'width=598,height=500');
                                      return false;">
                                    <i class="fa fa-facebook-square" style="color: rgb(210, 47, 37);"></i>
                                </a>
                                &nbsp;
                                <a href="https://twitter.com/share?url={{ URL::to('/') }}/articles-knowledge/{{ $blogPost->id }}&text={{$blogPost->title}}&via=FORSALEBYWEB"
                                   onclick="window.open('https://twitter.com/share?url={{ URL::to('/') }}/articles-knowledge/{{ $blogPost->id }}&text={{$blogPost->title}}&via=FORSALEBYWEB',
                                       'newwindow',
                                       'width=598,height=500');
                                       return false;">
                                    <i class="fa fa-twitter-square" style="color: rgb(210, 47, 37);"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Sidebar Widgets Column -->
                        <div class="col-md-4">
                            <!-- Side Widget -->
                            <div class="card my-4">
                                <h5 class="card-header">Recent Posts</h5>
                                <div class="card-body">
                                    @foreach($recentBlogPosts as $recentBlogPost)
                                        <div class="row">
                                            <div class="col-3">
                                                <a href="/articles-knowledge/{{ $recentBlogPost->id }}" style="color: inherit;text-decoration: inherit;">
                                                    @if(isset($recentBlogPost->image))
                                                        <img src="/uploads_78asd6as7d6asb/{{$recentBlogPost->image}}" alt="" class="img-fluid" style="height: 100px;">
                                                    @else
                                                        <img src="/uploads_78asd6as7d6asb/rs=w_200.jfif" alt="" class="img-fluid" style="height: 100px;">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="col-9">
                                                <a href="/articles-knowledge/{{ $recentBlogPost->id }}" style="color: inherit;text-decoration: inherit;">
                                                    <div class="row">
                                                        <p class="h6">{{ $recentBlogPost->title }}</p>
                                                    </div>
                                                    <div class="row">
                                                        <p class="text-muted">{{ date('F d, Y', strtotime($recentBlogPost->created_at)) }}</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>

        </section>
    </div>
</div>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        $("img").addClass("img-fluid");
        $("#post_content img").css('height', 'auto');
    });
</script>

@include('frontend.footer')
