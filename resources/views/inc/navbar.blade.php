

<!-- navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark nav-height sticky-top">
    <a class="navbar-brand" href="#">{{ config('app.name', 'SkateSpace') }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
    </button>
      
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav nav-tabs mr-auto ml-auto mt-2 mt-lg-0 round-tabs">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Map</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Map</a>
            </li>
            
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>