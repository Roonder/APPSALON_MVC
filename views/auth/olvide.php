<h1 class="nombre-pagina">Olvide mi Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu E-mail a continuacion:</p>

<?php 
    include_once __DIR__  . '/../templates/alertas.php';
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">E-mail</label>
        <input 
            type="email"
            name="email"
            placeholder="Tu Email"
            id="email"
        />
    </div>

    <input type="submit" class="boton" value="Enviar Instrucciones">
    
    <div class="acciones">
        <a href="/">¿Ya tienes una cuenta? ¡Inicia Sesion!</a>
        <a href="/crear-cuenta">¿Aún no tienes una cuenta? ¡Crea una!</a>
    </div>
</form>