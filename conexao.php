<?php
    if($conexao = mysqli_connect('localhost', 'root', 'bcd127')){
        mysqli_select_db($conexao, 'dbprocode');
    } else {
        echo '<script>
            alert("Erro ao tentar conectar com o banco de dados. Contate o Administrador do sistema.");
        </script>';
    }
?>
