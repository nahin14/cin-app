<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Claim It Now</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Claims<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/claims">View</a></li>
                            <li><a href="/claims/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Client<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/clients">View</a></li>
                            <li><a href="/clients/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Insurers<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/insurers">View</a></li>
                            <li><a href="/insurers/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solicitors<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/solicitors">View</a></li>
                            <li><a href="/solicitors/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tasks<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/tasks">View</a></li>
                            <li><a href="/tasks/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Users<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/users">View</a></li>
                            <li><a href="/auth/register">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vehicles<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/vehicles">View</a></li>
                            <li><a href="/vehicles/create">Add</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>