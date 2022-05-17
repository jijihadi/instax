{{-- popup comment --}}
<div class="modal fade modal-add" style="margin: 10em 0 0 0; border-radius:3em" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="post-content col-md-12 row" style="padding: 1em 0 1em 0 ">
                <form method="POST" action="{{ route('add-post') }}" enctype='multipart/form-data' class="form-inline">
                    @csrf
                    <div class="image-post col-md-7">
                        <div class="drop-zone">
                            <div class="drop-zone__prompt">Drop image or videos to post &nbsp;</div>
                            <input type="file" name="file[]" class="drop-zone__input">
                        </div>
                    </div>
                    <br>
                    <div class="text-post col-md-5">
                        <textarea class="form-control" name="content" id="mytextarea" placeholder="What are you thinking?"
                        rows="10"></textarea>
                        
                        <button class="btn btn-primary col-md-12 col-xs-12 btn-post" type="submit">Share</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Popup End-->
