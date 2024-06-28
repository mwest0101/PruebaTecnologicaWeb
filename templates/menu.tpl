<header class="border-bottom" id="mainMenu">
<div class="menuSep"></div>
<div class="menuPerfil">
    <div id="nameAndLastName"></div>   
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img class="imgIco" src="img/ico/user-04.png">
                <span class="usuarioLoged">{$usuarioLoged}</span>
            </a>
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                
                {if $usuarioLoged eq ""}
                    <li><a class="dropdown-item" href="index.php?action=login">Login</a></li>
                {/if}
                <li><a class="dropdown-item" href="index.php?action=register">Registrar Usuario</a></li>
                {if $usuarioLoged neq ""}
                    <li><a class="dropdown-item" href="index.php?action=modify">Modificar Usuario</a></li>                
                    <li><a class="dropdown-item" href="index.php?action=borrar">Borrar Usuario</a></li>
                {/if}
                <li><a class="dropdown-item" href="index.php?action=salir">Salir</a></li>                                
            </ul>   
        </div>
</div> 
</header>