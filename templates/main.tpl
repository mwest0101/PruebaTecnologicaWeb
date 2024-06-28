<section class="middlePanel">
    <aside class="border-end" id="leftMenu">
        <ul>
            {foreach $categorias as $categoria}
            <li><a href="index.php?product={$categoria.nombre}">{$categoria.nombre}</li>
            {/foreach}
            <!--<li><a href="javascript:createChat()">Chat</a></li>-->
        </ul>
    </aside>
    <div id="mainPanel">
        {$headerMessage}
        <section class="register_content">
            <div class="bg-light p-4 rounded" id="register_idDivList">
                {if $usuarioLoged neq ""}
                <header class="shadow-sm p-3 mb-3 rounded" id="register_mainMenu">
                    <h2>Listado de usuarios</h2>
                </header>
                
                <section class="mainContent">
                    
                    <div class="tableDiv">

                        <div>Nº</div>
                        <div>Usuario</div>
                        <div>Nombre</div>
                        <div>Apellido</div>
                        <div>E-mail</div>
                        <div>Accion</div>

                        {section name=index loop=$result}
                            
                        <div>{$result[index].id}</div>
                        <div>{$result[index].usuario}</div>
                        <div>{$result[index].nombre}</div>
                        <div>{$result[index].apellido}</div>
                        <div>{$result[index].email}</div>
                        <div>
                            
                            <a href="index.php?action=modify&id={$result[index].id}"><img src="img/ico/action_edit.png" width="20"></a>
                            <a href="index.php?action=borrar&id={$result[index].id}"><img src="img/ico/action_erase.png" width="20"></a>
                        </div>
                        {/section}

                    </div>
                    
                    
                </section>
                {/if}
            </div>
        </section>
    </div>
</section>