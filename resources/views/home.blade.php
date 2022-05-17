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
                            <img src="{{ asset('/assets/images/envato.png') }}" alt=""
                                class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html" class="profile">Diana Amber</a></h5>
                                <a href="#"><span class="follows"> follow</span></a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $('#like').click(function() {
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
                        if (response == 'added') {
                            $('.' + pid).removeClass('social-react');
                            $('.' + pid).addClass('social-react-yes');
                        }
                        if (response == 'deleted') {
                            $('.' + pid).removeClass('social-react-yes');
                            $('.' + pid).addClass('social-react');
                        }
                        $('.post-like').html("liked by {{ count(allbykey('likes', 'post_id', "+pid+")) }} people");
                    }
                });
            });
        });
    </script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js'
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            toolbar: false,
            menubar: false,
        });
    </script>
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
