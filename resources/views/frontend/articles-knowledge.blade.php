@include('frontend.header')

<div class="container-fluid" style="margin-top: 180px;">
    <div class="row">
        <section class="white_bg_section">
            <h1 class="text-center container">Real Estate Articles/Knowledge</h1>

            <div class="container">
                <hr>
                @foreach($blogPosts as $blogPost)
                    <div class="row">
                        <div class="col-3" style="max-height: 208px;overflow: hidden;">
                            <a href="/articles-knowledge/{{ $blogPost->id }}" style="color: inherit;text-decoration: inherit;">
                                @if(isset($blogPost->image))
                                    <img src="/uploads_78asd6as7d6asb/{{$blogPost->image}}" alt="" class="img-fluid">
                                @else
                                    <img src="/uploads_78asd6as7d6asb/rs=w_200.jfif" alt="" class="img-fluid">
                                @endif
                            </a>
                        </div>
                        <a href="/articles-knowledge/{{ $blogPost->id }}" style="color: inherit;text-decoration: inherit;">
                            <div class="col-9">
                                <div class="row">
                                    <p class="text-muted">{{ date('F d, Y', strtotime($blogPost->created_at)) }}</p>
                                </div>
                                <div class="row">
                                    <p class="h3">{{ $blogPost->title }}</p>
                                </div>
                                <div class="row">
                                    <p>{!! substr(strip_tags($blogPost->post_content), 0, 350) !!}...   </p>
                                </div>
                                <div class="row">
                                    <h6><a href="/articles-knowledge/{{ $blogPost->id }}">Continue Reading</a></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    <hr>
                @endforeach
            </div>

        </section>
    </div>
</div>

@include('frontend.footer')
