<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/posts"><img src="/img/metaLogo.png" class="customLogo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/posts">All Posts</a></li>
        <li><a href="/users">All Users</a></li>
        <li class=""><a href="/posts/create">Post<span class="sr-only"></span></a></li>
        <li><a href="#">Login</a></li>
        <li><a href="/users/create">Create An Account</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left">
              <div class="form-group">
                  <input type="text" class="form-control searchField" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
          </form>
        <li><a href="#"><span class="glyphicon glyphicon-inbox"></span> Messages</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Settings<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Log Out</a></li>
            <li><a href="#">Account Settings</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
