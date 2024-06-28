
    <section class="register_content">
    <div class="bg-light p-4 rounded" id="register_idDivForm">
      <header class="shadow-sm p-3 mb-3 rounded" id="register_mainMenu">
        <h2>{$title_regOmod}</h2>
      </header>
        
        <section class="mainContent">
          
          <form id="formulario" name="formulario" class="row g-3" method="POST">
            {$messageError.usuario}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_usuario">Usuario</span>
              <input type="text" class="form-control" placeholder="usuario"
                aria-label="usuario"
                name="usuario"
                id="usuario"
                value="{$usuario}"
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                {/literal} 
              />
            </div>
            {$messageError.nombre}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_nombre">Nombre</span>
              <input type="text" class="form-control" placeholder="nombre" 
              aria-label="nombre" 
              name="nombre" 
              id="nombre" 
              value="{$nombre}"
              aria-describedby="registracionDeUsuario"
              {literal} 
                pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
              {/literal} 
              />
            </div>
            {$messageError.apellido}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_apellido">Apellido</span>
              <input
                type="text"
                class="form-control"
                placeholder="apellido"
                aria-label="apellido"
                name="apellido"
                id="apellido"
                value="{$apellido}"
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                {/literal} 
              />
            </div>
            {$messageError.dni}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_dni">Dni</span>
              <input
                type="text"
                class="form-control"
                placeholder="dni"
                aria-label="dni"
                name="dni"
                id="dni"
                value="{$dni}"
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[A-Za-z0-9_-áéíóúñÑ]{1,30}" 
                {/literal} 
              />
            </div>
            {$messageError.email}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_email">Email</span>
              <input
                type="text"
                class="form-control"
                placeholder="email"
                aria-label="email"
                name="email"
                id="email"
                value="{$email}"
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                {/literal} 
              />
            </div>
            {$messageError.condicion}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_condicion">Condición</span>
              <select
                class="form-control"
                name="condicion"
                id="condicion" 
                value="{$condicion}"
                aria-describedby="registracionDeUsuario">                
                {if $condicion == "admin"}
                  <option selected="true" value="admin">Administrador</option>
                  <option value="user">Usuario</option>                      
                {else}
                  <option selected="true" value="user">Usuario</option>
                  <option value="admin">Administrador</option>            
                {/if}
                
              </select>
            </div>
          
            {$messageError.passwordDitinct}
            {$messageError.password}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_password">Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                aria-label="Password"
                name="password"
                id="password"                
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                {/literal} 
              />
            </div>
            {$messageError.rPassword}
            <div class="input-group mb-1">
              <span class="input-group-text" id="span_rPassword">Reingrese Password</span>
              <input
                type="password"
                class="form-control"
                placeholder="Reingrese Password"
                aria-label="rPassword"
                name="rPassword"
                id="rPassword"
                aria-describedby="registracionDeUsuario"
                {literal} 
                  pattern="[A-Za-z0-9_-áéíóúñÑ ]{1,30}" 
                {/literal} 
              />
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-outline-success" >
                {$submitTitle}
              </button>
              <button type="button" class="btn btn-outline-primary">
                <a href="index.php">Cancelar</a>
              </button>
            </div>
          </form>
        </section>
      </div>
    </section>

