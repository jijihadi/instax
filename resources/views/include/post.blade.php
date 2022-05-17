@php
$i = 0;
@endphp
@foreach ($post as $p)
    <div class="post-content">
        <div class="post-container">
            {{-- data user --}}
            <img src="{{ asset('/assets/images/envato.png') }}" alt="user" class="profile-photo-xs pull-left" />
            <div class="post-detail">
                <div class="user-info">
                    <h5><a href="timeline.html" class="profile"> &nbsp;
                            {{ namabyid('users', 'name', $p->user_id) }}</a>
                        <a href="#"><span class="following"> following</span></a>
                    </h5>
                </div>
            </div>
            <br>
            {{-- image --}}
            @php
                $img = allbykey('media', 'post_id', $p->id);
            @endphp
            @foreach ($img as $g)
                <img src="{{ asset('/upload') . '/' . $g->file }}" alt="post-image"
                    class="img-responsive post-image" />
            @endforeach
            {{-- end image --}}
            <div class="post-detail">
                <div class="reaction">
                    {{-- like proccess --}}
                    @if (count(allby2id('likes', 'post_id', 'user_id', $p->id, Auth::user()->id)) == 0)
                        <a id="like" data-id="{{ $p->id }}" class="btn like social-react {{ $p->id }}"><i
                                class="fa-solid fa-heart fa-xl"></i></a>
                    @endif
                    @if (count(allby2id('likes', 'post_id', 'user_id', $p->id, Auth::user()->id)) != 0)
                        <a id="like" data-id="{{ $p->id }}"
                            class="btn like social-react-yes {{ $p->id }}"><i
                                class="fa-solid fa-heart fa-xl"></i></a>
                    @endif
                    {{-- comment --}}
                    <a class="btn social-react"><i class="fa-solid fa-comment fa-xl"></i></a>
                    {{-- share --}}
                    <a class="btn social-react"><i class="fa-solid fa-share fa-xl"></i></a>
                </div>
                {{-- like count --}}
                <div class="post-like l{{$p->id}}">
                    liked by {{ count(allbykey('likes', 'post_id', $p->id)) }} people
                </div>
                {{-- content --}}
                <div class="post-text">
                    <p>{!! $p->content !!} <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i
                            class="em em-anguished"></i></p>
                </div>
                <a class="read"
                    onclick="$('.post-text').css('height', 'auto'); $(this).css('display', 'none');"><b>Read
                        more</b></a>
                <div class="line-divider"></div>
                {{-- comment show --}}
                <div class="container-comment c{{$p->id}}">
                    @php
                        $comm = limitbykey('comments', 'post_id', $p->id, 2);
                    @endphp
                    @if (!empty($comm->toarray()))
                        @foreach ($comm as $c)
                            <div class="post-comment">
                                <p><a href="timeline.html"
                                        class="profile-link">{{ namabyid('users', 'name', $c->user_id) }} </a><i
                                        class="em em-laughing"></i>
                                    {{ $c->text }}</p>
                            </div>
                        @endforeach
                    @endif
                    @if (empty($comm->toarray()))
                        <p>be the first to comment, and be nice!</p>
                    @endif
                </div>

                @if (!empty($comm->toarray()))
                    {{-- popup comment --}}
                    <a class="allcomment" data-toggle="modal" data-target=".modal-{{ $i }}"><b>View
                            all comment</b></a>
                    <div class="modal fade modal-{{ $i }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="post-content">
                                    @php
                                        $img = allbykey('media', 'post_id', $p->id);
                                    @endphp
                                    @foreach ($img as $g)
                                        <img src="{{ asset('/upload') . '/' . $g->file }}" alt="post-image"
                                            class="img-responsive post-image" />
                                    @endforeach
                                    <div class="post-container">
                                        <img src="{{ asset('/assets/images/envato.png') }}" alt="user"
                                            class="profile-photo-xs pull-left" />
                                        <div class="post-detail">
                                            <div class="user-info">
                                                <h5><a href="timeline.html" class="profile-link"> &nbsp;
                                                        {{ namabyid('users', 'name', $p->user_id) }}</a> <span
                                                        class="following">following</span>
                                                </h5>
                                            </div>
                                            <div class="reaction">
                                                <a class="btn social-react"><i class="fa-solid fa-heart fa-xl"></i></a>
                                                <a class="btn social-react"><i
                                                        class="fa-solid fa-comment fa-xl"></i></a>
                                                <a class="btn social-react"><i class="fa-solid fa-share fa-xl"></i></a>
                                            </div>
                                            <div class="post-like">
                                                liked by {{ count(allbykey('likes', 'post_id', $p->id)) }} people
                                            </div>
                                            <div class="line-divider"></div>
                                            <div class="post-texts">
                                                <p>{!! $p->content !!} <i class="em em-anguished"></i> <i
                                                        class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                            </div>
                                            <div class="line-divider"></div>
                                            @php
                                                $comm = allbykey('comments', 'post_id', $p->id);
                                            @endphp
                                            @if (!empty($comm->toarray()))
                                                @foreach ($comm as $c)
                                                    <div class="post-comment">
                                                        <p><a href="timeline.html"
                                                                class="profile-link">{{ namabyid('users', 'name', $c->user_id) }}
                                                            </a><i class="em em-laughing"></i>
                                                            {{ $c->text }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
                                            <div class="post-comment">
                                                <img src="http://placehold.it/300x300" alt=""
                                                    class="profile-photo-sm" />
                                                <input type="text" class="form-control" placeholder="Post a comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Popup End-->
                @endif
                {{-- post own comment --}}

                <div class="post-comment">
                    <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm" />
                    <form data-id="{{$p->id}}" method="POST" class="comment col-lg-12 col-md-12 col-xs-12 ">
                        @csrf
                        <input type="hidden" value="{{$p->id}}" name="id">
                        <input type="text" class="form-control comment-input" name="text" placeholder="Post a comment">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @php
        $i++;
    @endphp
@endforeach
