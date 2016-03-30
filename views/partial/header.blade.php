<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
          	<a class="navbar-brand" href="/{{ Config::get('laraedit.uri') }}">LaraEdit</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          	<ul class="nav navbar-nav">
	            <li><a href="#" class="button"><i class="fa fa-bars"></i></a></li>
          	</ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="button"><i class="fa fa-search"></i></a></li>
                <li><a href="#" class="button">
                    <i class="fa fa-bell"><span class="badge">0</span></i>
                </a></li>
                <li><a href="#" class="button">
                    <i class="fa fa-envelope"><span class="badge">2</span></i>
                </a></li>
                <li><a href="#" class="dropdown">
                    <img class="avatar img-circle" src="https://avatars3.githubusercontent.com/u/3633464?v=3&s=460"/>
                    &nbsp; Derek Bourgeois &nbsp; 
                    <i class="fa fa-caret-down"></i>
                </a></li>
                <li><a href="#" class="button"><i class="fa fa-ellipsis-v"></i></a></li>
            </ul>
        </div>
    </div>
</nav>