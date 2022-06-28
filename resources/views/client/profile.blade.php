
@extends("client_layout.client_layout")
@section('title')
Profile
@endsection
@section('content')
  
<header class="profile-header">
    <div class="profile-container">
      <div class="profile">
        <div class="profile-image">
          <img src="assets/images/profile.jpg" alt="" />
        </div>
        <div class="profile-user-settings">
          
        <form action="{{url('/edit_profile')}}">
        <h1 class="profile-user-name">username</h1>
        <button class="profile-btn profile-edit-btn" > Edit_Profile</button>
        <button
        class="profile-btn profile-settings-btn"
        aria-label="profile settings"
        
      >
        <i class="fas fa-cog"></i>
       </button>
        </form>
          
         
        </div>
        <div class="profile-stats">
          <ul>
            <li><span class="profile-stat-count">345</span> posts</li>
            <li><span class="profile-stat-count">1345</span> followers</li>
            <li><span class="profile-stat-count">1945</span> following</li>
          </ul>
        </div>
        <div class="profile-bio">
          <p>
            <span class="profile-real-name">Name</span> This is a descriptions
          </p>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div class="profile-container">
      <div class="gallery">
        <div class="gallery-item">
          <img src="assets/images/2.jpg" class="gallery-image" alt="" />
          <div class="gallery-item-info">
            <ul>
              <li class="gallery-item-likes">
                <span class="hide-gallery-element">Likes:</span>
                <i class="fas fa-heart"></i>
              </li>
              <li class="gallery-item-comments">
                <span class="hide-gallery-element">Comments:</span>
                <i class="fas fa-comment"></i>
              </li>
            </ul>
          </div>
        </div>

        <div class="gallery-item">
          <img
            src="https://cdn.theatlantic.com/thumbor/pwZ-oMSofZCJftLlWJ0sjfnSk6U=/900x600/media/img/photo/2021/06/winners-2021-bigpicture-natural-wor/a01_5_Michelle%20Valberg/original.jpg"
            class="gallery-image"
            alt=""
          />
          <div class="gallery-item-info">
            <ul>
              <li class="gallery-item-likes">
                <span class="hide-gallery-element">156:</span>
                <i class="fas fa-heart"></i>
              </li>
              <li class="gallery-item-comments">
                <span class="hide-gallery-element">100:</span>
                <i class="fas fa-comment"></i>
              </li>
            </ul>
          </div>
        </div>

        <div class="gallery-item">
          <img
            src="https://www.thoughtco.com/thmb/GAtp0KJWAXudEuz9ufGu2jKAdYQ=/3909x2199/smart/filters:no_upscale()/film-photography-592347645-59e4d0609abed500119e7b14.jpg"
            class="gallery-image"
            alt=""
          />
          <div class="gallery-item-info">
            <ul>
              <li class="gallery-item-likes">
                <span class="hide-gallery-element">Likes:</span>
                <i class="fas fa-heart"></i>
              </li>
              <li class="gallery-item-comments">
                <span class="hide-gallery-element">Comments:</span>
                <i class="fas fa-comment"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>
    @endsection

    <!-- script -->
    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    @endsection
  