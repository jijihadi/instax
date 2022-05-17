<header id="header">
    <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <span class="navbar-toggle col-6" aria-expanded="false">
                    <span><a data-toggle="modal" data-target=".modal-add"><i
                                class="fa-solid fa-circle-plus fa-xl text-white"></i></a></span>
                    <span><a href="#"><i class="fa-solid fa-house fa-xl  text-white"></i></a></span>
                    <span><a href="#"><i class="fa-solid fa-user fa-xl  text-white"></i></a></span>
                </span>
                <a class="navbar-brand" style="color: white" href="#">instax</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-menu">
                    <li><a data-toggle="modal" data-target=".modal-add"><i
                                class="fa-solid fa-circle-plus fa-xl text-white"></i></a></li>
                    <li><a href="#"><i class="fa-solid fa-house fa-xl  text-white"></i></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false"><i class="fa-solid fa-user fa-xl  text-white"></i></a>
                        <ul class="dropdown-menu newsfeed-home">
                            <li><a href="index.html">Profile</a></li>
                            <li><a href="{{'signout'}}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right hidden-sm">
                    <div class="form-group">
                        <i class="icon ion-android-search"></i>
                        <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</header>
