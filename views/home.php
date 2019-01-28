<?php function albumCard(){?>
          <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div> <?php 
      } ?>
  <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <?php mainNav(); ?>
        
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>User Section</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Merchandise
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Calendar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Contact
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark my-4 w-100">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">IIT ISM Gymkhana</h1>
              <p class="lead my-3">You have arrived at the online residence of IIT Dhanbad's Gymkhana. At IIT Dhanbad we undertake a variety of cultural activities, which are broadly classified under 11 genres – Dance, Dramatics, Film and Media(F&M), Literary Arts, Music, Photography and Fine Arts(PFA), Speaking, Indian Languages, Lifestyle, Design and Classical & Folk Arts.<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">TO LIFE. TO SURPRISES. TO DISCOVERY</a></p>
            </div>
      </div>
    <div class="row mb-0">
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-primary">Cultural</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured Event</a>
          </h3>
          <div class="mb-1 text-muted">Jan 23</div>
          <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, vel eius fugiat hic dolorem facilis?</p>
          <a href="#">Continue reading</a>
        </div>
        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="250" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card flex-md-row mb-4 shadow-sm h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
          <strong class="d-inline-block mb-2 text-success">Council</strong>
          <h3 class="mb-0">
            <a class="text-dark" href="#">Featured News</a>
          </h3>
          <div class="mb-1 text-muted">Jan 26</div>
          <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cum explicabo velit error aliquid eveniet!</p>
          <a href="#">Continue reading</a>
        </div>
        
        <svg class="bd-placeholder-img card-img-right flex-auto d-none d-lg-block" width="250" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect fill="#55595c" width="100%" height="100%"/><text fill="#eceeef" dy=".3em" x="50%" y="50%">Thumbnail</text></svg>
        </div>
    </div>
  </div>