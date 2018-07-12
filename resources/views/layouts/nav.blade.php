<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">REST API</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <router-link to="/" tag="li" exact>
                <a class="nav-link" >Home</a>
            </router-link>
           <router-link to="/about" tag="li">
                <a class="nav-link" >About</a>
            </router-link>
            <router-link to="/contact" tag="li">
              <a class="nav-link" >Contact</a>
          </router-link>
        </ul>
      </div>
</nav>