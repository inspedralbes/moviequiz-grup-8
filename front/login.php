<!-- <form class="col s9">
                        <div class="row">
                            <div class="input-field col s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                            <div class="input-field col s3">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_telephone" type="password" class="validate">
                                <label for="icon_telephone">Password</label>
                            </div>
                            <div class="input-field col s3">
                                <a class="waves-effect waves-light btn-small">Login</a>
                            </div>
                        </div>
                    </form> -->


                    	<!--CREACION DEL LOGIN-->
	<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>
    
          <div class="col-md-4">
            <section class="login-form">
              <form method="post" action="validarlogin.php" role="login">
               
                   
                   <input type="usuario" name="usuario" placeholder="Email"/>
                   <input type="password" name="password" placeholder="Contraseña" class="form-control input-lg" id="password"  />
                   
                   <button type="submit" name="go" class="btn btn-lg btn-primary btn-block" onclick="Verifica();" >Accesar</button>
                
              </form>
            </section>  
          </div>          
    </div>
  </div>
