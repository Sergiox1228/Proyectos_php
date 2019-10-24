<?php

  $modulo = "index";

  if ( isset($_GET["m"]) )
  {
    switch( $_GET["m"] ){
      
      case "home":
        $modulo = "index";
        break;

      case "eventos":
        $modulo = "eventos";
        break;

      case "peleadores":
        $modulo = "peleadores";
        break;

      case "noticias":
        $modulo = "noticias";
        break;

      case "rankings":
        $modulo = "rankings";
        break;

         case "login":
        $modulo = "login";
        break;


         case "contactos":
        $modulo = "contactos";
        break;

         case "registro-usuario":
        $modulo = "registro-usuario";
        break;

           case "registro-peleadores":
        $modulo = "registro-peleadores";
        break;

            case "mensaje":
        $modulo = "mensaje";
        break;

        case "logout":
        $modulo = "logout";
        break;

    }
  }

  include "vistas/" . $modulo . "/index.php";


?>