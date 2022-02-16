<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
 <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
<!-- Fontawesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
 
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css" />
 
<!-- Custom Scripts -->
<script src="../assets/js/login.js"></script>
</head>
<body>
<aside id="login" class="col-md-4">    
    <div class="card">
        <div class="card-body">
            <a href="" class="float-right btn btn-outline-primary">Registro</a>
            <h4 class="card-title mb-4 mt-1">Acceso</h4>
        
            <hr />
          
            <form method="post" name="login_form" id="login_form" action="" onsubmit="enviar(this); return false;">
                 <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" id="email" name="email" value="test@test.com" class="form-control input_user" value="" placeholder="Email" autocomplete />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" id="password" name="password" autocomplete class="form-control input_pass" placeholder="password">
                </div>        
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Recordarme</label>
                    </div>
                </div>               
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="access" name="access">Acceso</button>
                        </div> 
                    </div>
                    <div class="col-md-6 pt-2 pr-4 text-right">
                        <a class="small" href="#" class="">¿Olvidó su contraseña?</a>
                    </div>                                            
                </div>      
            </form>
                
            <!-- messages -->
            <div class="row">
                <div class="col-12">
                    <div class="outer-loader">
                        <span class="inner-loader"><img src="assets/img/loader.gif" alt="consultando ..." /></span>     
                        <span class="messages"></span>
                    </div>    
                    <span class="debug"></span>    
                </div>
            </div> <!-- end messages -->     
        </div>
        
    </div> 
</aside>
</body>
</html>