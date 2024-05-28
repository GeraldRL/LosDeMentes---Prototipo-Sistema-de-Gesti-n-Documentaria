

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Animated Navbar Boostrap 5.2.1</title>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>

  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css'><link rel="stylesheet" href="../Css/nabvar.css">
  <link rel="icon" href="../Recursos/Vue.js_Logo_2.svg.png" type="image/x-icon">

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
                  href=""
                >
                  <span class="thumb"
                    ><ion-icon name="mail-unread-outline"></ion-icon 
                  ></span>
                  <span class="menuteks">Team</span>
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
                  <span class="menuteks">Salir</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- akhir navbar -->
    </div>

<div class="container">
  <div id="app" class="row">
    <div class="col">
      <div id="home" style="padding:0;">
        <div class="content">
          <h1 class="title">Agregar Usuario</h1>
          <div class="form">
            <form class="form-container" @submit.prevent="registrarUsuario">
              <div class="form-item col-5">
                <input class="input" type="text" required="required" v-model="nombre"/>
                <label class="label" for="nombre">nombre</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" v-model="apellidos"/>
                <label class="label" for="apellidos">apellido</label>
              </div>
              <div class="form-item">
                <input class="input" type="text" required="required" v-model="nick"/>
                <label class="label" for="nick">nick</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" v-model="tipo"/>
                <label class="label" for="tipo">tipo</label>
              </div>
              <div class="form-item col-5">
                <input class="input" type="text" required="required" v-model="area"/>
                <label class="label" for="area">area</label>
              </div>
              <div class="form-item">
                <input class="input" type="email" required="required" v-model="correo"/>
                <label class="label" for="correo">Correo</label>
              </div>
              <div class="form-item">
                <input class="input" type="password" required="required" v-model="contrasena"/>
                <label class="label" for="contrasena">Contraseña</label>
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
<script>
new Vue({
  el: '#app',
  data: {
    nombre: '',
    apellidos: '',
    nick: '',
    tipo: '',
    area: '',
    correo: '',
    contrasena: '',
    mensaje: ''
  },
  methods: {
    validarCampos() {
      // Validar campos nombre, apellidos, tipo y área solo con letras
      const regexSoloLetras = /^[a-zA-Z\s]*$/;
      if (!regexSoloLetras.test(this.nombre) || !regexSoloLetras.test(this.apellidos) || !regexSoloLetras.test(this.tipo) || !regexSoloLetras.test(this.area)) {
        this.mensaje = 'Los campos nombre, apellidos, tipo y área solo deben contener letras';
        alert(this.mensaje);
        return false;
      }

      // Validar campo correo electrónico
      const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!regexCorreo.test(this.correo)) {
        this.mensaje = 'Correo electrónico inválido';
        alert(this.mensaje);
        return false;
      }

      // Validar contraseña
      const contrasenasInvalidas = ['123456', 'password', 'contraseña']; // Lista de contraseñas comunes
      if (contrasenasInvalidas.includes(this.contrasena.toLowerCase())) {
        this.mensaje = 'La contraseña es muy común, por favor elige otra';
        alert(this.mensaje);
        return false;
      }

      return true; // Todos los campos son válidos
    },
    registrarUsuario() {
      if (this.validarCampos()) {
        const formData = new FormData();
        formData.append('nombre', this.nombre);
        formData.append('apellidos', this.apellidos);
        formData.append('nick', this.nick);
        formData.append('tipo', this.tipo);
        formData.append('area', this.area);
        formData.append('correo', this.correo);
        formData.append('contrasena', this.contrasena);

        fetch('../bd/registro.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            this.mensaje = 'Usuario agregado exitosamente';
          } else {
            this.mensaje = 'No se pudo agregar el usuario';
          }
          alert(this.mensaje);
        })
        .catch(error => {
          this.mensaje = 'Ocurrió un error al registrar el usuario';
          alert(this.mensaje);
        });
      }
    }
  }
});
</script>


</body>
</html>
