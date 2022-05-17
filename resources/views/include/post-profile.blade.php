@php
$i = 0;
@endphp
<div class="col-md-12 col-lg-12 row">
    @foreach ($post as $p)
        <div class="post-content profile-content col-md-3 col-lg-3 col-sm-3">
            <div class="post-container ">
                {{-- image --}}
                @php
                    $img = allbykey('media', 'post_id', $p->id);
                @endphp
                @foreach ($img as $g)
                    <div class="crop">
                        <img src="{{ asset('/upload') . '/' . $g->file }}" alt="post-image"
                            class="img-responsive post-image" />
                    </div>
                @endforeach
                {{-- end image --}}
                <div class="post-detail">
                    <div class="reaction">
                        {{-- like proccess --}}
                        @if (count(allby2id('likes', 'post_id', 'user_id', $p->id, Auth::user()->id)) == 0)
                            <a id="like" data-id="{{ $p->id }}"
                                class="btn like social-react {{ $p->id }}"><i
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
                </div>
            </div>
        </div>
        @php
            $i++;
        @endphp
    @endforeach
</div>
