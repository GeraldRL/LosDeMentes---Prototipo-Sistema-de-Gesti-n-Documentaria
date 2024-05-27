<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Navbar Boostrap 5.2.1</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css'><link rel="stylesheet" href="../Css/nabvar.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
      <!-- navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">COPESCO</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse menubar"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="#home"
                >
                  <span class="thumb"
                    ><ion-icon name="home-outline"></ion-icon
                  ></span>
                  <span class="menuteks">Home</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="#profile"
                >
                  <span class="thumb"
                    ><ion-icon name="people-outline"></ion-icon
                  ></span>
                  <span class="menuteks">Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="../index.php"
                >
                  <span class="thumb"
                    ><ion-icon name="people-circle-outline"></ion-icon
                  ></span>
                  <span class="menuteks">Team</span>
                </a>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link d-flex align-items-center flex-column"
                  href="#"
                >
                  <span class="thumb"
                    ><ion-icon name="mail-unread-outline"></ion-icon
                  ></span>
                  <span class="menuteks">Contact</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- akhir navbar -->
    </div>

<div class="container">
  <div class="row">
    <div class="col">
      <div id="home" padding:0;>
        <div class="content">
          <h1 class="title">Agregar Usuario</h1>
          <div class="form">
            <form class="form-container" action="../bd/registro.php" method="POST">
              <div class="form-item col-5">
                <input class="input" type="text" required="required" id="nombre"/>
                <label class="label" for="name">nombre</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" id="apellidos"/>
                <label class="label" for="lastname">apellido</label>
              </div>
              <div class="form-item">
                <input class="input" type="text" required="required" id="nick"/>
                <label class="label" for="nick">nick</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" id="tipo"/>
                <label class="label" for="tipo">tipo</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" id="area"/>
                <label class="label" for="tipo">area</label>
              </div>
              <div class="form-item">
                <input class="input" type="email" required="required" id="correo"/>
                <label class="label" for="tipo">Correo</label>
              </div>
              <div class="form-item">
                <input class="input" type="password" required="required" id="contrasena"/>
                <label class="label" for="tipo">Contraseña</label>
              </div>
              
              <div class="form-item">
                <input class="btn-enviar" type="submit" value="Registrar"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col">
      <div id="profile" style="background-color: #555; padding:0;">
        
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script><script  src="../js/navbar.js"></script>

</body>
</html>
