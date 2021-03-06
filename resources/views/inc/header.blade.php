<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if($cities->count())
            @foreach($cities as $city)
              <a class="dropdown-item" href="{{ route('city.show' , [$city->slug]) }}">{{ $city->name }}</a>
            @endforeach
          @endif          
        </div>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/carts">Cart
          @if($carts->count())
           <span class="badge badge-warning">{{ $carts->count() }}</span>
           @endif
          </a>
      </li>
      
    </ul>
    
  </div>
</nav>