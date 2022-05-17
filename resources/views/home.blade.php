@extends('layouts.app')

@section('content')
    <div id="page-contents">
        <div class="container">
            <div class="row">

                <!-- Newsfeed Common Side Bar Left
              ================================================= -->
                <div class="col-md-3 static">
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

                    <!-- Media
                ================================================= -->
                    <div class="media">
                        <div class="row js-masonry"
                            data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                            <div class="grid-sizer col-md-6 col-sm-6"></div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-1">
                                        <img src="http://placehold.it/800x800" alt="" class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 63</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 12</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Richard Bell</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins ago
                                                                </p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i class="icon ion-thumbsup"></i>
                                                                    13</a>
                                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i>
                                                                    0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor sit
                                                                    amet, consectetur adipiscing elit, sed do eiusmod tempor
                                                                    incididunt ut labore et dolore magna aliqua. Ut enim ad
                                                                    minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-2">
                                        <img src="http://placehold.it/1637x1275" alt="" class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 100</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 99</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Sarah Cruiz</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i class="icon ion-thumbsup"></i>
                                                                    13</a>
                                                                <a class="btn text-red"><i class="fa fa-thumbs-down"></i>
                                                                    0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-3">
                                        <img src="http://placehold.it/1920x2880" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 233</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 30</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Robert Cook</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-4">
                                        <img src="http://placehold.it/2048x1365" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 73</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">John Doe</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-5">
                                        <img src="http://placehold.it/500x600" alt="" class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 34</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Sophia Lee</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-6">
                                        <img src="http://placehold.it/1280x1000" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 71</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">John Doe</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-7">
                                        <img src="http://placehold.it/1000x1000" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 55</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Alexis Clark</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-7" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1290x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-8">
                                        <img src="http://placehold.it/1600x1400" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 81</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 1</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Linda Lohan</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-8" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->

                                </div>
                            </div>
                            <div class="grid-item col-md-6 col-sm-6">
                                <div class="media-grid">
                                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-9">
                                        <img src="http://placehold.it/1920x1280" alt=""
                                            class="img-responsive post-image" />
                                    </div>
                                    <div class="media-info">
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 47</a>
                                            <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 9</a>
                                        </div>
                                        <div class="user-info">
                                            <img src="http://placehold.it/300x300" alt=""
                                                class="profile-photo-sm pull-left" />
                                            <div class="user">
                                                <h6><a href="#" class="profile-link">Julia Cox</a></h6>
                                                <a class="text-green" href="#">Friend</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Popup-->
                                    <div class="modal fade modal-9" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="post-content">
                                                    <img src="http://placehold.it/1920x1280" alt="post-image"
                                                        class="img-responsive post-image" />
                                                    <div class="post-container">
                                                        <img src="http://placehold.it/300x300" alt="user"
                                                            class="profile-photo-md pull-left" />
                                                        <div class="post-detail">
                                                            <div class="user-info">
                                                                <h5><a href="timeline.html" class="profile-link">Alexis
                                                                        Clark</a> <span
                                                                        class="following">following</span></h5>
                                                                <p class="text-muted">Published a photo about 3 mins
                                                                    ago</p>
                                                            </div>
                                                            <div class="reaction">
                                                                <a class="btn text-green"><i
                                                                        class="icon ion-thumbsup"></i> 13</a>
                                                                <a class="btn text-red"><i
                                                                        class="fa fa-thumbs-down"></i> 0</a>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                                    exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat. Duis aute irure dolor in
                                                                    reprehenderit in voluptate velit esse cillum dolore eu
                                                                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                                                    non proident, sunt in culpa qui officia deserunt mollit
                                                                    anim id est laborum. <i class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i> <i
                                                                        class="em em-anguished"></i></p>
                                                            </div>
                                                            <div class="line-divider"></div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">Diana
                                                                    </a><i class="em em-laughing"></i> Lorem ipsum dolor
                                                                    sit amet, consectetur adipiscing elit, sed do eiusmod
                                                                    tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                    enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <p><a href="timeline.html" class="profile-link">John</a>
                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                                    sed do eiusmod tempor incididunt ut labore et dolore
                                                                    magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                                            </div>
                                                            <div class="post-comment">
                                                                <img src="http://placehold.it/300x300" alt=""
                                                                    class="profile-photo-sm" />
                                                                <input type="text" class="form-control"
                                                                    placeholder="Post a comment">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Popup End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsfeed Common Side Bar Right
              ================================================= -->
                <div class="col-md-2 static">
                    <div class="suggestions" id="sticky-sidebar">
                        <h4 class="grey">Who to Follow</h4>
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html">Diana Amber</a></h5>
                                <a href="#" class="text-green">Add friend</a>
                            </div>
                        </div>
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html">Cris Haris</a></h5>
                                <a href="#" class="text-green">Add friend</a>
                            </div>
                        </div>
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html">Brian Walton</a></h5>
                                <a href="#" class="text-green">Add friend</a>
                            </div>
                        </div>
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html">Olivia Steward</a></h5>
                                <a href="#" class="text-green">Add friend</a>
                            </div>
                        </div>
                        <div class="follow-user">
                            <img src="http://placehold.it/300x300" alt="" class="profile-photo-sm pull-left" />
                            <div>
                                <h5><a href="timeline.html">Sophia Page</a></h5>
                                <a href="#" class="text-green">Add friend</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
