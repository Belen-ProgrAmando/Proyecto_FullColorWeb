
<section id="Contacto">
<div class="container">
  <h2>¡Contactanos!</h2>
  <form method="POST" action="enviar_consulta.php">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="50">
</div>
<div class="form-group">
      <label for="nombre">Apellido:</label>
      <input type="text" class="form-control" id="apellido" name="apellido" required maxlength="50">
</div>
<div class="form-group">
      <label for="telefono">Telefono:</label>
      <input type="telefono" class="form-control" id="telefono" name="telefono" required maxlength="30">
</div>
   
    <div class="form-group">
      <label for="mensaje">Mensaje:</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="10" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>

</div>

<?php
   if (isset($_GET['e']))
   echo "<h3>¡Consulta Enviada!</h3>";
  ?>
  
    </section>


<footer class="footer">

    <div class="column">
        <h3 class="h3-footer">Contactanos</h3> 
        <p><i class="fas fa-phone"></i> +34634945593</p>
        <p><i class="fas fa-map-marker"></i> Cardenal Almaraz, Salamanca. Cp. 37003 </p>
        
    </div>
    <div class="column">
        <h3 class="h3-footer">Redes Sociales</h3>
        <nav id="redes">
          <ul id="botones_redes">
            <li><a href="facebook"><img src="imagenes/logo_facebook.png"></a></li>
            <li><a href="instagram"><img src="imagenes/logo_instagram.png"></a></li>
          </ul>

</nav>