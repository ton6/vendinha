<?php
require 'conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>vendinha</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    <body>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-12">                
                <form class="form-horizontal" method="post" action="login.php">
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Login</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Login">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Senha</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href> Esqueci minha senha</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Entrar</button>
                        </div>
                    </div>
                </form>
<?php
    require 'rodape.php';
?>
    
