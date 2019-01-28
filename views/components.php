<?php function topNav(){ ?>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">IIT ISM Cultural</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign in</a>
    </li>
  </ul>
</nav> 
<?php } ?>
<?php function mainNav(){ ?>
<ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link " href="#">
          
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">            
            Clubs
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">
          <span class="sr-only">(current)</span>
            Events
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Blog
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Facilities
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="layers"></span>
            Council
          </a>
        </li>
      </ul>
<?php } ?>
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


