
<nav class="navbar">
    <div class="nav-wrapper">
      <img class="brand-img" src="assets/images/logo.png" />
      <form class="search-form">
        <input type="text" class="search-box" placeholder="search.." />
      </form>
      <div class="nav-items">
          <ul>
        <li><a href="{{url('/')}}"> <i class="icon fas fa-home" ></i></a></li>

       <li><a href="{{url('/')}}"> <i class="icon fas fa-plus"></i></a></li>
       <li><i class="icon fas fa-heart"></i>
        <div class="icon user-profile">
          <a href="{{url('profile')}}"><i class="fas fa-user"></i></a>
        </div></li>
    </ul>
      </div>
    </div>
  </nav>
 