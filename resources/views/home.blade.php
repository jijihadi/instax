@extends('layouts.app')

@section('content')
    <div id="page-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.include.alert')
                </div>
                <!-- Newsfeed Common Side Bar Left ================================================= -->
                <div class="col-md-2 static">
                    <!--chat block ends-->
                </div>

                <div class="col-md-7">

                    <!-- Post Create Box
                                                                                                ================================================= -->
                    <div class="create-post">
                        <div class="row">
                            <div class="alert bg-primary bg-gradient alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                                <h2 class="welcome"><strong> Selamat datang, {{ Auth::user()->name }}.</strong></h2>
                                <i> i hope ur day bright as the fu*kin sun</i>
                            </div>
                        </div>
                    </div><!-- Post Create Box End -->

                    <!-- Media ================================================= -->

                    @include('include.post')
                </div>

                @include('include.add-post')

                <!-- Newsfeed Common Side Bar Right================================================= -->
                <div class="col-md-3 static">
                    <div class="suggestions" id="sticky-sidebar">
                        <h4 class="grey">People to follow</h4>
                        <div class="follow-user">
                            @foreach ($user as $u)
                                {{ $u->pict }}
                                {!! smallpp($u->pict) !!}
                                <div>
                                    <h5><a href="{{ 'peek/'. $u->id }}"
                                            class="profile">{{ $u->name }}</a></h5>
                                    @if (count(allby2id('relations', 'follows', 'user_id', $u->id, Auth::user()->id)) == 0)
                                        <a href="#" class="follow" data-id="{{ $u->id }}"><span
                                                class="follows f{{ $u->id }}"> follow</span></a>
                                    @endif
                                    @if (count(allby2id('relations', 'follows', 'user_id', $u->id, Auth::user()->id)) != 0)
                                        <a href="#" class="follow" data-id="{{ $u->id }}"><span
                                                class="follows text-green f{{ $u->id }}"> following</span></a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{-- follow func --}}
    <script>
        $(function() {
            $('.follow').click(function() {
                var pid = $.parseJSON($(this).attr('data-id'));
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: 'follow',
                    data: {
                        id: pid
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response == 'added') {
                            $('.f' + pid).addClass('text-green').html('following');
                        }
                        if (response == 'deleted') {
                            $('.f' + pid).removeClass('text-green').html('follow');
                        }
                    }
                });
            });
        });
    </script>
    {{-- comment func --}}
    <script>
        $(function() {
            $('.comment').on('submit', function(e) {

                e.preventDefault();
                var pid = $.parseJSON($(this).attr('data-id'));
                $.ajax({
                    type: 'POST',
                    url: 'comment',
                    data: $(this).serialize(),
                    success: function(response) {
                        $(".c" + pid).load(location.href + " .c" + pid);
                        $('.comment-input').val('');
                    }
                });

            });

        });
    </script>
    {{-- like func --}}
    <script>
        $(function() {
            $('.like').click(function() {
                var pid = $.parseJSON($(this).attr('data-id'));
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: 'like',
                    data: {
                        id: pid
                    },
                    success: function(response) {
                        console.log(response);
                        if (response != 'added') {
                            $('.' + pid).css("color", "#1f1f1f");
                            $(".l" + pid).load(location.href + " .l" + pid);
                        }
                        if (response != 'deleted') {
                            $('.' + pid).css("color", "#d8304c");
                            $(".l" + pid).load(location.href + " .l" + pid);
                        }
                    }
                });
            });
        });
        $(function() {
            $('.like2').click(function() {
                var pid = $.parseJSON($(this).attr('data-id'));
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'POST',
                    url: 'like',
                    data: {
                        id: pid
                    },
                    success: function(response) {
                        console.log(response);
                        if (response != 'added') {
                            $('.' + pid).css("color", "#1f1f1f");
                            $(".l2" + pid).load(location.href + " .l" + pid);
                        }
                        if (response != 'deleted') {
                            $('.' + pid).css("color", "#d8304c");
                            $(".l2" + pid).load(location.href + " .l" + pid);
                        }
                    }
                });
            });
        });
    </script>
    {{-- tinymce func --}}
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            toolbar: false,
            menubar: false,
        });
    </script>
    {{-- drop drag upload --}}
    <script>
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
            const dropZoneElement = inputElement.closest(".drop-zone");
            dropZoneElement.addEventListener("click", (e) => {
                inputElement.click();
            });
            inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                    updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            });
            dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
            });
            ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });
            dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();
                if (e.dataTransfer.files.length) {
                    inputElement.files = e.dataTransfer.files;
                    updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }
                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        function updateThumbnail(dropZoneElement, file) {
            let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");
            // First time - remove the prompt
            if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
            }
            // First time - there is no thumbnail element, so lets create it
            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
            }
            thumbnailElement.dataset.label = file.name;
            // Show thumbnail for image files
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
            } else {
                thumbnailElement.style.backgroundImage = null;
            }
        }
    </script>
@endsection
