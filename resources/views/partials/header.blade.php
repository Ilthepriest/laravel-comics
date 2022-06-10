<header>
    <div class="container d-flex justify-content-between align-items-center">
    <img width="60" src="../img/dc-logo.png" alt="">
      <ul>
          <li><a href="#">Characters</a></li>
          <li><a href="{{route('home')}}" class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}">Comics</a></li>
          <li><a href="#">Movies</a></li>
          <li><a href="#">Tv</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Collectibles</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Fans</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Shop</a></li>
      </ul>
      <div class="input-group rounded cerca">
        <input type="search" class="form-control rounded border-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
        </span>
      </div>
    </div>
     
  </header>