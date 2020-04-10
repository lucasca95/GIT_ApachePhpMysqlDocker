



<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <span class="navbar-brand">&nbsp PHP-MySQL-Docker&nbsp</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  <div class="nav navbar-right">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Connections
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <span class="dropdown-item">MySQL
            <?php
              if ($db_connected) {
                  echo "<span><img height=\"30px\" width=\"20px\" src=\"static/img/icons8-casilla-de-verificación-2-48.png\" alt=\"tick verde\"></span>";
              }
            ?>
          </span>
        </div>
      </li>
    </ul>
  </div>
</nav>