@php
$i = 0;
@endphp
@foreach ($post as $p)
    <div class="post-content">
        <div class="post-container">
            {{-- data user --}}
            {!! smallpp($p->pict) !!}
            <div class="post-detail">
                <div class="user-info">
                    <h5><a href="{{ 'peek/' . $p->user_id }}" class="profile"> &nbsp;
                            {{ namabyid('users', 'name', $p->user_id) }}</a>
                        @if (count(allby2id('relations', 'follows', 'user_id', $p->id, Auth::user()->id)) == 0)
                            <a href="#" class="follow" data-id="{{ $p->id }}"><span
                                    class="follows f{{ $p->id }}"> follow</span></a>
                        @endif
                        @if (count(allby2id('relations', 'follows', 'user_id', $p->id, Auth::user()->id)) != 0)
                            <a href="#" class="follow" data-id="{{ $p->id }}"><span
                                    class="follows text-green f{{ $p->id }}"> following</span></a>
                        @endif
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
                    <a class="btn social-react " onclick="$('#comment{{ $p->id }}').focus()"><i
                            class="fa-solid fa-comment fa-xl"></i></a>
                    {{-- share --}}
                    <a class="btn social-react"><i class="fa-solid fa-share fa-xl"></i></a>
                </div>
                {{-- like count --}}
                <div class="post-like l{{ $p->id }}">
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
                <div class="container-comment c{{ $p->id }}">
                    @php
                        $comm = limitbykey('comments', 'post_id', $p->id, 2);
                    @endphp
                    @if (!empty($comm->toarray()))
                        @foreach ($comm as $c)
                            <div class="post-comment">
                                <p><a href="{{'peek/'.$c->user_id}}"
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
                                                <h5><a href="{{ 'peek/' . $p->user_id }}" class="profile"> &nbsp;
                                                    {{ namabyid('users', 'name', $p->user_id) }}</a>
                                                @if (count(allby2id('relations', 'follows', 'user_id', $p->id, Auth::user()->id)) == 0)
                                                    <a href="#" class="follow" data-id="{{ $p->id }}"><span
                                                            class="follows f{{ $p->id }}"> follow</span></a>
                                                @endif
                                                @if (count(allby2id('relations', 'follows', 'user_id', $p->id, Auth::user()->id)) != 0)
                                                    <a href="#" class="follow" data-id="{{ $p->id }}"><span
                                                            class="follows text-green f{{ $p->id }}"> following</span></a>
                                                @endif
                                            </h5>
                                            </div>
                                            <div class="reaction">
                                                {{-- like proccess --}}
                                                @if (count(allby2id('likes', 'post_id', 'user_id', $p->id, Auth::user()->id)) == 0)
                                                    <a id="like2" data-id="{{ $p->id }}"
                                                        class="btn like social-react {{ $p->id }}"><i
                                                            class="fa-solid fa-heart fa-xl"></i></a>
                                                @endif
                                                @if (count(allby2id('likes', 'post_id', 'user_id', $p->id, Auth::user()->id)) != 0)
                                                    <a id="like2" data-id="{{ $p->id }}"
                                                        class="btn like social-react-yes {{ $p->id }}"><i
                                                            class="fa-solid fa-heart fa-xl"></i></a>
                                                @endif
                                                {{-- comment --}}
                                                <a class="btn social-react "
                                                    onclick="$('.modal-{{ $i }}').modal('toggle');$('#comment{{ $p->id }}').focus()"><i
                                                        class="fa-solid fa-comment fa-xl"></i></a>
                                                {{-- share --}}
                                                <a class="btn social-react"><i class="fa-solid fa-share fa-xl"></i></a>
                                            </div>
                                            <div class="post-like l2{{ $p->id }}">
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
                                                        <p><a href="{{'peek/'.$c->user_id}}"
                                                                class="profile-link">{{ namabyid('users', 'name', $c->user_id) }}
                                                            </a><i class="em em-laughing"></i>
                                                            {{ $c->text }}</p>
                                                    </div>
                                                @endforeach
                                            @endif
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
                    {!! smallpp($p->pict) !!}
                    <form data-id="{{ $p->id }}" method="POST" class="comment col-lg-12 col-md-12 col-xs-12 ">
                        @csrf
                        <input type="hidden" value="{{ $p->id }}" name="id">
                        <input type="text" class="form-control comment-input" id="comment{{ $p->id }}"
                            name="text" placeholder="Post a comment">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @php
        $i++;
    @endphp
@endforeach
