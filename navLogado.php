  <!-- CABEÇALHO -->
  <header>
    <div class="custom-nav-container d-flex align-items-center justify-content-between px-2 shadow-sm py-3">
      <a class="text-clipped navbar-brand" href="index.php">
        <i class="far fa-gem d-flex">
          <span class="m-auto">ﾠLuizzy</span>
        </i>
      </a>

      <div class="main-nav-outer d-flex">
        <i class="fas fa-times text-clipped menu-close-icon d-lg-none"></i>

        <nav class="main-nav navbar navbar-light navbar-expand-lg text-center m-auto">
          <ul class="navbar-nav d-flex">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li>
              <a class="nav-link" href="#">Promoções</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Feminino</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Masculino</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Infantil</a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="nav-icons-container d-flex justify-content-between">
        <div class="nav-icons">
          <a href="">
            <i class="fas fa-search text-clipped"></i>
          </a>
        </div>

        <div class="nav-icons">
          <a href="cart.php">
            <i class="fas fa-shopping-bag bag-item-count text-clipped"></i>
          </a>
		  
        </div>

        <div class="nav-icons">
          <div class="dropdown">
            <a class="dropdown-toggle" href="" data-toggle="dropdown">
              <i class="fas fa-user text-clipped"></i>
            </a>
            <div class="dropdown-menu">
              <form method="post" action="validaUsuario.php" class="p-2 text-secondary">
                <div class="form-group">
                  <h1> Olá, usuário! </h1>
				   <div class="dropdown-divider mt-0"></div>
                </div>
                <div class="form-group">
	
                  <a href="#"> Meus pedidos! </a> </br>
				  <a href="#"> Minhas informações! </a>
                </div>
                <div class="form-check">
                </div>
                <button type="submit" class="btn btn-bg my-2">Deslogar</button>
              </form>
              <div class="dropdown-divider mt-0"></div>
              <a class="dropdown-item">ﾠﾠﾠ ﾠﾠﾠﾠﾠﾠ ﾠﾠﾠ ﾠﾠﾠﾠﾠﾠ ﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠ</a>
              <a class="dropdown-item" href="#">ﾠﾠﾠ ﾠﾠﾠﾠﾠﾠ ﾠﾠﾠ ﾠﾠﾠﾠﾠﾠ ﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠﾠ</a>

            </div>
          </div>
        </div>

        <div class="nav-icons d-lg-none">
          <i class="fas fa-bars open-menu-icon text-clipped"></i>
        </div>
      </div>
    </div>
	
	<!-- fim nav -->