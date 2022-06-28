
    
    @extends('client_layout.client_layout')
    @section('title')
    Edit Profile
    @endsection
    @section('content')

    <!-- section -->
    <section class="main">
      <div class="wrapper">
        <div class="left-col">
          <h3>Update Profile</h3>

          <form action="">
            <div class="mb-3">
              <img
                src="assets/images/profile.jpg"
                class="edit-profile-image"
                alt=""
              />
              <input type="file" name="image" class="form-control" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <p class="form-control">Email</p>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input
                type="text"
                class="form-control"
                name="username"
                id="username"
                placeholder="username"
              />
            </div>
            <div class="mb-3">
              <label for="bio" class="form-label">Bio</label>
              <textarea
                name="bio"
                id="bio"
                class="form-control"
                cols="30"
                rows="3"
              ></textarea>
            </div>
            <div class="mb-3">
              <input
                name="update_profile_btn"
                id="update_profile_btn"
                class="update-profile-btn"
                value="update"
                type="button"
              />
            </div>
          </form>
        </div>
        <div class="right-col">
          <!--Profile-Card-->

          <div class="profile-card">
            <div class="profile-pic">
              <img src="assets/images/profile.jpg" alt="" />
            </div>
            <div>
              <p class="username">username</p>
              <p class="sub-text">sub-text</p>
            </div>
            <button class="logout-btn">logout</button>
          </div>

          <!--Suggestion-Card-->

          <p class="suggestion-text">Suggestions For you</p>

          <div class="suggestion-card">
            <div class="suggestion-pic">
              <img src="assets/images/2.jpg" alt="" />
            </div>
            <div>
              <p class="username">username</p>
              <p class="sub-text">sub-text</p>
            </div>
            <button class="follow-btn">follow</button>
          </div>
        </div>
      </div>
    </section>
  @endsection
    <!-- script -->
    @section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    @endsection
  