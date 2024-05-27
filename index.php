<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/a2dd6045c4.js" crossorigin="anonymous"></script>
    
    <!--Extraemos el cdn de VUE-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'>
    <link rel="stylesheet" href="Css/style.css">
    <script src="js/app.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Copesco</title>
</head>
<body>
<div id="app">
    <div class="login-container">
        <div class="logo-container vertical-center">
        <img src="Recursos/docs.png" alt="">
        <img src="Recursos/copesco.png" alt="">
        
        </div>
        
        <div class="vertical-center text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form @submit.prevent="saludar">
                            <img class="mb-4" src="Recursos/copesco2.png" width="200">
                            <h1 class="h2 mb-3 fw-normal">Inicio de sesión</h1>

                            <div class="form-floating">
                                <input type="text" class="form-control" v-model="email" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Correo electronico</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" v-model="password" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>

                            <div class="checkbox mb-3">
                                <label>
                                    
                                </label>
                            </div>
                            <button class="w-100 btn btn-lg btn-danger" type="submit">Iniciar sesion</button>
                            <p class="mt-5 mb-3 text-muted">
                                <a id="forgot-password" href="#">¿Ha olvidado su contraseña?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    new Vue({
        el: '#app',
        data: {
            email: '',
            password: ''
        },
        methods: {
            saludar: function () {
                const formData = new FormData();
                formData.append('email', this.email);
                formData.append('password', this.password);

                fetch('bd/login.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Bienvenido usuario');
                        if (data.success) {
                            window.location.href = data.redirect;
                        }
                    } else {
                        alert('Email o contraseña incorrectos. Intente de nuevo.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Ocurrió un error. Intente de nuevo.');
                });
            }
        }
    });
</script>
</body>
</html>
