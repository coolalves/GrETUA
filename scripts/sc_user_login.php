<?php
require_once "../connections/connection.php";

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $link = new_db_connection();

    $stmt = mysqli_stmt_init($link);

    $query = "SELECT id_utilizadores, password, nome, apelido, foto_perfil FROM utilizadores WHERE email = ?";

    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, 's', $email);

        if (mysqli_stmt_execute($stmt)) {

            mysqli_stmt_bind_result($stmt, $userid, $password_hash, $nome, $apelido, $fotoperfil);

            if (mysqli_stmt_fetch($stmt)) {
             
                if (password_verify($password, $password_hash)) {
                    // Guardar sessão de utilizador
                    session_start();
                    $_SESSION["id_user"] = $userid;
                    $_SESSION["nome"] = $nome . " " . $apelido;
                    $_SESSION["fperfil"] = $fotoperfil;
                    $_SESSION["email"] = $email;
                    $_SESSION["nomeproprio"] = $nome;

                    // Feedback de sucesso
                    header("Location: ../gretua.php");
                } else {
                    // Password está errada
                    header("Location: ../index.php?msg=123123");
                }

            } else {
                // user não existe
                echo "Incorrect credentials!";
                echo "<a href='../index.php'>Try again</a>";
                header("Location: ../index.php?msg=123");
            }

        } else {
            // Acção de erro
            echo "Error:" . mysqli_stmt_error($stmt);
        }
    } else {
        // Acção de erro
        echo "Error:" . mysqli_error($link);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    header("Location: ../index.php?msg=0");
}
