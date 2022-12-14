@extends('frontEnd.master')
@section('title')
    Blog Details Page
@endsection
@section('content')
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">{{$blog->category}}</span> <span class="mx-1">&bullet;</span> <span>{{date("M jS 'y",strtotime($blog->date))}}</span></div>
                        <h1 class="mb-5">{{$blog->title}}</h1>
                        <p><span class="firstcharacter">{{substr($blog->description,0,1)}}</span>{{substr($blog->description,1,250)}}</p>

                        <figure class="my-4">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid">
{{--                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>--}}
                        </figure>
                        <p>{{substr($blog->description,250)}}</p>

                        <figure class="my-4">
                            <img src="{{asset('frontEndasset')}}/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>
                        </figure>
                        <p>Quis molestiae, dolorem consequuntur labore perferendis enim accusantium commodi optio, sequi magnam ad consectetur iste omnis! Voluptatibus, quia officia esse necessitatibus magnam tempore reprehenderit quo aspernatur! Assumenda, minus dolorem repellendus corporis corrupti quia temporibus repudiandae in. Sit rem aut, consectetur repudiandae perferendis nemo alias, iure ipsam omnis quam soluta, nobis animi quis aliquam blanditiis at. Dicta nemo vero sequi exercitationem.</p>
                        <p>Architecto ex id at illum aperiam corporis, quidem magnam doloribus non eligendi delectus laborum porro molestiae beatae eveniet dolor odit optio soluta dolores! Eaque odit a nihil recusandae, error repellendus debitis ex autem ab commodi, maiores officiis doloribus provident optio, architecto assumenda! Nihil cum laboriosam eos dolore aliquid perferendis amet doloremque quibusdam odio soluta vero odit, ipsa, quisquam quod nulla.</p>
                        <p>Consequuntur corrupti fugiat quod! Ducimus sequi nemo illo ad necessitatibus amet nobis corporis et quasi. Optio cum neque fuga. Ad excepturi magnam quisquam ex voluptatibus vitae aut nam quidem doloribus, architecto perspiciatis sit consequatur pariatur alias animi expedita quas? Et doloribus voluptatibus perferendis qui fugiat voluptatum autem facere aspernatur quidem quae assumenda iste, sit similique, necessitatibus laborum magni. Ea, dolores!</p>
                        <p>Possimus temporibus rerum illo quia repudiandae provident sed quas atque. Ipsam adipisci accusamus iste optio illo aliquam molestias? Voluptatibus, veniam recusandae facilis nobis perspiciatis rem similique, nisi ad explicabo ipsa voluptatum, inventore molestiae natus adipisci? Fuga delectus quia assumenda totam aspernatur. Nobis hic ea rem, quaerat voluptate vero illum laboriosam omnis aspernatur labore, natus ex iusto ducimus exercitationem a officia.</p>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <h5 class="comment-title py-4">{{count($comments)}} Comments</h5>
                        @foreach($comments as $comment )
                        <div class="comment d-flex mb-4">
                            <div class="flex-shrink-0">
                                <div class="avatar avatar-sm rounded-circle">
                                    <img class="avatar-img" src="{{asset('frontEndasset')}}/assets/img/person-5.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-2 ms-sm-3">
                                <div class="comment-meta d-flex align-items-baseline">
                                    <h6 class="me-2">{{$comment->name}}</h6>
                                    <span class="text-muted">{{date("M jS 'y g:i a",strtotime($comment->created_at))}}</span>
                                </div>
                                <div class="comment-body">{{$comment->comment}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- End Comments -->


                    @if(Session::get('userId'))
                    <!-- ======= Comments Form ======= -->
                    <div class="row justify-content-center mt-5">
                        <form action="{{route('new.commernt')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Session::get('userId')}}"/>
                            <input type="hidden" name="blog_id" value="{{$blog->id}}"/>
                        <div class="col-lg-12">
                            <h5 class="comment-title">Leave a Comment</h5>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="comment-message">Message</label>
                                    <textarea class="form-control" name="comment" id="comment-message" placeholder="Enter your name" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" value="Post comment">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div><!-- End Comments Form -->
                    @else
                        <h3>Please <a href="{{route('user.login')}}" class="text-center">Login</a>For Comments</h3>
                    @endif

                </div>
                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->
                    <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                            </li>
                                @foreach($categoryWiseBlog as $categorywiseBlog)
                                <div class="post-entry-1 border-bottom">
                                    <div class="post-meta"><span class="date">{{$categorywiseBlog->category}}</span>
                                        <span class="mx-1">&bullet;</span> <span>{{date("M jS 'y",strtotime($categorywiseBlog->date))}}</span></div>
                                    <h2 class="mb-2"><a href="#">{{$categorywiseBlog->title}}</a></h2>
                                    <span class="author mb-3 d-block">{{$categorywiseBlog->author_name}}</span>
                                </div>
                               @endforeach
                        </div>
                    </div>

                    <div class="aside-block">
                        <h3 class="aside-title">Video</h3>
                        <div class="video-post">
                            <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                <span class="bi-play-fill"></span>
                                <img src="{{asset('frontEndasset')}}/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div><!-- End Video -->

                    <div class="aside-block">
                        <h3 class="aside-title">Categories</h3>
                        <ul class="aside-links list-unstyled">
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                            <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                        </ul>
                    </div><!-- End Categories -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <li><a href="category.html">Business</a></li>
                            <li><a href="category.html">Culture</a></li>
                            <li><a href="category.html">Sport</a></li>
                            <li><a href="category.html">Food</a></li>
                            <li><a href="category.html">Politics</a></li>
                            <li><a href="category.html">Celebrity</a></li>
                            <li><a href="category.html">Startups</a></li>
                            <li><a href="category.html">Travel</a></li>
                        </ul>
                    </div><!-- End Tags -->

                </div>
            </div>
        </div>
    </section>

@endsection
