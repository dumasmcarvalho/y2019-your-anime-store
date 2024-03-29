<?php

$pagina = "principal.php";
$titulo = "Tela Principal";

if (isset($_GET["pagina"])) {
    switch ($_GET["pagina"]) {
        case "cadastrar":
            $pagina = "cadastrarUsuario.php";
            $titulo = "Tela de Cadastro";
            break;
        case "autenticar":
            $pagina = "realizarLogin.php";
            $titulo = "Tela de Login";
            break;
        case "recuperar":
            $pagina = "recuperarSenha.php";
            $titulo = "Tela de Recuperar Senha";
            break;
        case "escolher":
            $pagina = "escolherProdutos.php";
            $titulo = "Tela de Produtos";
            break;
        case "comprar":
            $pagina = "realizarCompra.php";
            $titulo = "Tela de Compra";
            break;
        default:
            $pagina = "principal.php";
            $titulo = "Tela Principal";
    }
}

if (((isset($_GET["pagina"])) and (isset($_COOKIE['usuario']))) and $_GET["pagina"] == "autenticado") {
    $pagina = "usuarioAutenticado.php";
    $titulo = "YourAnime Store";
}

include("./includes/header.php");

echo "<section>";

if (isset($_COOKIE['usuario'])) {
    include("./includes/sidebar.php");
}

include("./pages/" . $pagina);

echo "</section>";

include("./includes/footer.php");
