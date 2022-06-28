@extends('client_layout.client_layout')

@section('title')
Home
@endsection

@section('content')

    <!-- navigation -->
    

    <!-- section -->
    <section class="main">
      <div class="wrapper">
        <div class="left-col">
          <!---STATUS-->

          <div class="status-wrapper">
            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>
            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>
            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>
            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>
            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>

            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>

            <div class="status-card">
              <div class="profile-pic">
                <img src="assets/images/profile.jpg" alt="" />
              </div>
              <p class="username">username</p>
            </div>
          </div>

          <!--POST-->

          <div class="post">
            <div class="info">
              <div class="user">
                <div class="profile-pic">
                  <img src="assets/images/profile.jpg" alt="" />
                </div>
                <p class="username">username</p>
              </div>
              <i class="fas fa-ellipsis-h options"></i>
            </div>
            <img src="assets/images/1.jpg" class="post-image" />
            <div class="post-content">
              <div class="reaction-wrapper">
                <i class="icon fas fa-heart"></i>
                <i class="icon fas fa-comment"></i>
              </div>
              <p class="likes">2,154 likes</p>
              <p class="description">
                <span>username</span> this is a post by username
              </p>
              <p class="post-time">2021/12/08</p>
            </div>

            <div class="comment-wrapper">
              <img src="assets/images/profile.jpg" class="icon" />
              <input
                type="text"
                class="comment-box"
                placeholder="Add a comment"
              />
              <button class="comment-btn">post</button>
            </div>
          </div>
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