<!DOCTYPE html>
<html lang="pt-pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEJHQjLw8fH/6Orq/4WLiFiMkY/57/Hx/+Lk5P+Fi4hYjJGP+efp6f/u8PD/aW5reYWLiFiFi4hYAAAAAPHy8v/u8PD/7O7u/+zu7v+MkY/57O7u/+zu7v/k5ub/jJGP+ezu7v/s7u7/7O7u/4yRj/nv8PD/jJCPrwAAAADX2dn/7vDw/+7w8P/6+vr/ztDQ/+zu7v/s7u7/6evr/4yRj/ns7u7/7O7u/+vt7f/q7Oz/7/Hx/4WLiFgAAAAAjJGP+fT19f/09fX/8/X1/+Dh4f/x8vL/7/Dw/+3v7//a3Nz/7O7u/+zu7v+MkY/57O7u/4yRj/mFi4hYAAAAAIWPhRn5+fn/+Pn5//j5+f/3+Pj/9fb2//P09P/x8vL/7vDw/+zu7v/s7u7/7O7u/+3v7/+EiodTAAAAAAAAAAAAAAAAjJGP+fv7+//9/f3//Pz8//n6+v/3+Pj/9PX1//Lz8//v8fH/7O7u/+zu7v+MkY/5hYuIWAAAAAAAAAAAAAAAAAAAAAD9/f3//Pz8//39/f/7/Pz/+fr6//f4+P/19vb/8fPz/+7w8P/4+fn/hYuIWAAAAAAAAAAAAAAAAAAAAAAAAAAAhYuIWPn6+v/6+vr/+vr6//n6+v/4+fn/9vf3//T19f/x8vL/hYyJcwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD3+Pj/+Pn5//j6+v/5+fn/+Pj4//b4+P/09vb/8vPz/4WLiFgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9vf3//j4+P/8/f3/+fn5//j5+f/6+vr/9vb2//P09P+Fi4hYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPn5+f+Ghob/REZF//v7+/+Ghob/REZF//b39//09fX/hYuIWAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD9/v7/+vr6/4aGhv/+/v7/7e3t/4aGhv/3+Pj/+fr6/4WLiFgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAArrGw8/r6+v/7+/v/+/z8//r7+//5+fn/9/j4/+Di4f2Fi4hYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD9/f3/+Pn5//j5+f/4+fn/9/j4//7+/v+Fi4hYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIyRj/nz9PT/9vb2/4yRj/mFi4hYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA5EcAAIAAAACAAQAAgAEAAMADAADAAwAA4AcAAPAPAADwDwAA8A8AAPAPAADwDwAA8A8AAPgfAAD8PwAA//8AAA==" rel="icon" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap 5-->

    <title>⠀⠀</title>
</head>

<body>



    <br>
    <div class="container mt-3">
        <h2>Utilizadores da Base de Dados</h2>
        <hr>
        <?php include("scriptPHP/dataTable.php"); ?>
        <hr>
        <button type="button" onclick="limpaTexto()" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal">Adicionar</button>
        <br>
        <!-- Alerta de Error -->

    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Adicionar Utilizador</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">

                    <!--Alerta de Erro -->
                    <div class="alert alert-danger" style="display: none;" id="error-alert">
                        <strong>Error!</strong> <span id="txt-error"></span>
                    </div>

                    <!-- Alerta de Sucesso -->
                    <div class="alert alert-success" style="display: none;" id="success-alert">
                        <strong>Sucesso!</strong> <span id="txt-success"></span>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-dark" id="bt-adicionar-modal" onclick="addModal()">Adicionar</button>
                </div>
            </div>
        </div>
    </div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap 5-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- possivel precisa de atualizar -->
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/reloadpage.js" type="text/javascript"></script> <!-- da reload a page em 5 horas -->

</html>