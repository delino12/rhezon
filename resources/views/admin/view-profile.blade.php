@extends('layouts.app-main-admin')

@section('title')
    {{ env("APP_NAME") }} - User's Profile
@endsection

@section('contents')
    <style type="text/css">
        
        /* Tabs*/
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        
        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #1F2C46;
            font-size: 16px;
            border-left: 0px solid #FFF !important;
            border-right: 0px solid #FFF !important;
            border-top: 0px solid #FFF !important;
            border-radius: 0px !important;
        }

        .view-profile-avatar {
            position: absolute;
            top: 0;
            margin-top: 120px;
            margin-left: 100px;
        }

        .tab-content > .active {
            display: block;
            border: none !important;
        }

        .carousel-item-next, .carousel-item-prev, .carousel-item.active {
            display: block;
            border: none !important;
        }

        .carousel .carousel-inner .carousel-item img {
            border-radius: 9px;
        }
    </style>

    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Plumcam Users</h6>
                </div>
                <div class="card-body" style="margin: 0px; padding: 0px !important;">
                    {{-- <div style="background-image: url({{$profile->background_image ?? getRandomBackgroundColor()}}); background-repeat: none; background-position: 50%; background-size: cover;border-top-right-radius: 9px;border-top-left-radius: 9px;height: 200px;" id="bg_preview_image">
                        
                        <div class="view-profile-avatar">
                            @if($profile->avatar == null)
                                <img id="bg_avatar_image" src="{{asset('images/avatar.jpg')}}" class="view-profile-img rounded-circle">
                            @else
                                <img id="bg_avatar_image" src="{{ $profile->avatar }}" class="view-profile-img-secondary rounded-circle">
                            @endif
                        </div>
                    </div> --}}
                    <div class="container" style="min-height: 90vh;">
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="px-2 ml-5">

                                    <h4 class="mt-5 pt-4">
                                        <img src="{{asset( $post->user->user_bio->avatar ?? 'images/avatar.png')}}">
                                        {{ $profile->display_name ?? $profile->user->name }}</h4>
                                    <span class="small">{{ '@'.$profile->username }} &#8226; last seen {{ now()->subDays(2)->format("F j") }} </span><br />
                                    <span class="small">{{ $profile->about ?? 'Status...' }}</span>
                                    <br />
                                    <span class="small">{{ count($posts) }} posts &#8226; 1.67K likes </span><br />
                                    <hr />
                                </div>

                                <div class="px-2 ml-5">
                                   

                                    @if($profile->is_free == false)
                                        <span class="small">Subscription</span>
                                        <p class="small">${{ $profile->subscription_price }} / month</p>
                                        

                                        @if($profile->is_followed == false)
                                            {{-- <button class="btn btn-danger btn-md" onclick="showSubscribeAndFollowModal({{ $profile->user_id }}, '{{ $profile->display_name ?? $profile->user->name }}')">
                                                Subscribe for ${{ $profile->subscription_price }}  / month
                                            </button> --}}
                                        @elseif($profile->is_followed == true)
                                            {{-- <button class="btn btn-danger btn-md" onclick="showSubscribeAndFollowModal({{ $profile->user_id }}, '{{ $profile->display_name ?? $profile->user->name }}')">
                                                Unsubscribe
                                            </button> --}}
                                        @endif
                                    @else
                                        <p class="small">Follow <b>{{ $profile->display_name ?? $profile->user->name }}</b> and gain access to free contents</p>
                                        @if($profile->is_followed == false)
                                            {{-- <button class="btn btn-danger btn-md" onclick="showFollowOnlyModal({{ $profile->user_id }}, '{{ $profile->display_name ?? $profile->user->name }}')">
                                                Follow
                                            </button> --}}
                                        @elseif($profile->is_followed == true)
                                            {{-- <button class="btn btn-danger btn-md" onclick="showUnFollowOnlyModal({{ $profile->user_id }}, '{{ $profile->display_name ?? $profile->user->name }}')">
                                                Unfollow
                                            </button> --}}
                                        @endif
                                    @endif
                                        
                                </div>
                            </div>

                            <div class="col-md-8">
                                <!-- Tabs -->
                                <section id="tabs">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 ">
                                                <nav>
                                                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Post</a>
                                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Images</a>
                                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Videos</a>
                                                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">File</a>
                                                    </div>
                                                </nav>
                                                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                        @if(count($posts) > 0)
                                                         @foreach($posts as $post)
                                                                <div class="row mb-4">
                                                                    <div class="col-md-12">
                                                                        <div class="timeline-card">
                                                                            <div class="timeline-card-header row">
                                                                                {{-- <div class="col-sm-2" style="padding-right: 0rem !important;margin-right:0rem !important;">
                                                                                    <img src="{{asset( $post->user->user_bio->avatar ?? 'images/avatar.png')}}" width="60%" class="rounded-circle" style="height: 50px !important;">
                                                                                </div> --}}
                                                                                {{-- <div class="col-sm-8 timeline-author">
                                                                                    <span class="timeline-author-title">
                                                                                        <a href="{{url('/')}}/{{ $post->user->user_bio->username }}" class="">
                                                                                            {{ $post->user->user_bio->display_name ?? $post->user->name }}
                                                                                        </a>
                                                                                    </span>
                                                                                    <br />
                                                                                    <span class="timeline-author-handle">
                                                                                        <a href="{{url('/')}}/{{ $post->user->user_bio->username }}" class="">
                                                                                            {{ '@'.$post->user->user_bio->username ?? '' }}
                                                                                        </a>
                                                                                    </span>
                                                                                </div> --}}
                                                                                {{-- <div class="col-sm-2 text-right">
                                                                                    <div class="timeline-post-timestamp">
                                                                                        <span class="timeline-post-date">{{ $post->created_at->diffForHumans() }}</span>
                                                                                        <i class="fas fa-ellipsis-v"></i>
                                                                                    </div>
                                                                                </div> --}}
                                                                            </div>

                                                                            <div class="timeline-card-body">
                                                                                {{-- <img src="{{asset('images/timeline-bg.png')}}" width="100%"> --}}
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div id="carouselExampleIndicators{{ $post->id }}" class="carousel slide" data-ride="carousel">
                                                                                            <div class="carousel-inner">
                                                                                                @foreach($post->post_media as $index => $media)
                                                                                                    {{-- <div class="carousel-item @if($index == 0) active @endif">
                                                                                                      <img class="d-block w-100 h-100" src="{{ $media->media_url }}" alt="First slide">
                                                                                                    </div> --}}

                                                                                                    @if(str_contains($media->media_url, '.jpeg') || str_contains($media->media_url, '.png') || str_contains($media->media_url, '.jpg'))
                                                                                                        <img class="d-block w-100 h-100" src="{{ $media->media_url }}" alt="First slide">
                                                                                                    @endif
                                                                                                    
                                                                                                    @if(str_contains($media->media_url, '.mp4'))
                                                                                                        <video width="100%" height="100%" controls="true">
                                                                                                          <source src="{{ $media->media_url }}" type="video/mp4">
                                                                                                          Your browser does not support the video tag.
                                                                                                        </video>
                                                                                                    @endif
                                                                                                @endforeach
                                                                                            </div>
                                                                                            @if(count($post->post_media) > 1)
                                                                                                <a class="carousel-control-prev" href="#carouselExampleIndicators{{ $post->id }}" role="button" data-slide="prev">
                                                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                                                    <span class="sr-only">Previous</span>
                                                                                                </a>
                                                                                                <a class="carousel-control-next" href="#carouselExampleIndicators{{ $post->id }}" role="button" data-slide="next">
                                                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                                                    <span class="sr-only">Next</span>
                                                                                                </a>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>

                                                                                </div>

                                                                                {{-- Action buttons section --}}
                                                                                <div class="timeline-action-buttons pt-2">
                                                                                    <div>
                                                                                        <a href="javascript:void(0);" onclick="func_name()" class="mr-2 pr-2">
                                                                                            {{-- <i class="fas fa-heart small"></i> --}}
                                                                                            <i class="lni lni-heart"></i>
                                                                                        </a>

                                                                                        <a href="javascript:void(0);" onclick="func_name()" class="mr-2 pr-2">
                                                                                            {{-- <i class="fas fa-comment-alt small"></i> --}}
                                                                                            <i class="lni lni-comments-alt"></i>
                                                                                        </a>

                                                                                        <a href="javascript:void(0);" onclick="func_name()" class="mr-2">
                                                                                            {{-- <i class="fas fa-dollar-sign small"></i> <span class="para-text">Send Tip</span> --}}
                                                                                            {{-- <i class="lni lni-money-location"></i> <span class="para-text">Send Tip</span> --}}
                                                                                        </a>

                                                                                        <a href="javascript:void(0);" onclick="func_name()" class="mr-2 float-right">
                                                                                            {{-- <i class="fas fa-dollar-sign small"></i> <span class="para-text">Send Tip</span> --}}
                                                                                            <i class="lni lni-bookmark"></i> 
                                                                                        </a>
                                                                                    </div>
                                                                                    <span class="para-text">{{ rand(111,999) }} likes</span> -
                                                                                    <span class="para-text">{{ rand(11,99) }} comments</span>
                                                                                </div>
                                                                            </div>

                                                                            {{-- Timeline footer --}}
                                                                            <div class="timeline-card-footer">
                                                                                <p class="small">{{ $post->contents }}</p>
                                                                                @if($post->poll !== null)
                                                                                    <ul class="list-group small">
                                                                                        @foreach($post->poll->poll_options as $option)
                                                                                            <li class="list-group-item">
                                                                                                <a href="javascript:void(0);" onclick="votePollRequest({{$option->id}})" class="col-md-12">
                                                                                                   <i class="fas fa-circle-notch"></i> {{ $option->option }}
                                                                                                </a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        @else
                                                            <p class="small">
                                                                {{ $profile->user->name }} does not have any posts yet, creating contents is easy on plumcam. All contents created by user will display here.
                                                            </p>
                                                        @endif
                                                           
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                        <p class="small">
                                                            {{ $profile->user->name }} does not have any posts yet, creating contents is easy on plumcam. All contents created by user will display here.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                        <p class="small">
                                                            {{ $profile->user->name }} does not have any posts yet, creating contents is easy on plumcam. All contents created by user will display here.
                                                        </p>
                                                    </div>
                                                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                                        <p class="small">
                                                            {{ $profile->user->name }} does not have any posts yet, creating contents is easy on plumcam. All contents created by user will display here.
                                                        </p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- ./Tabs -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
@endsection

@section('scripts')
    <script type="text/javascript">
        function showSubscribeAndFollowModal(user_id, user_name) {
            $("#selected_subscribe_user_id").val(user_id);
            $(".preview-follow-username").html(user_name);
            $("#show-subscribe-follow-modal").modal();
        }

        function showFollowOnlyModal(user_id, user_name) {
            $("#selected_user_id").val(user_id);
            $(".preview-follow-username").html(user_name);
            $("#show-only-follow-modal").modal();
        }

        function followUserContent() {
            var _token = '{{ csrf_token() }}';
            var user_id = $("#selected_user_id").val();
            var query = {_token, user_id}

            fetch(`{{url('following/follow-user')}}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                swal(
                    results.status,
                    results.message,
                    results.status
                );
                window.location.reload();
            }).catch(err => {
                console.log(err);
            });
        }

        function followUserContentAndSubscribe() {
            var _token = '{{ csrf_token() }}';
            var user_id = $("#selected_subscribe_user_id").val();
            var query = {_token, user_id}

            fetch(`{{url('following/subscribe/to-user')}}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(query)
            }).then(r => {
                return r.json();
            }).then(results => {
                console.log(results);
                swal(
                    results.status,
                    results.message,
                    results.status
                );
                // window.location.reload();
            }).catch(err => {
                console.log(err);
            });
        }
    </script>
@endsection