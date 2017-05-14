<?php 

include('../autoload.php');
$assets = new Assets();
$html   = new Html();
$assets ->principal('Lista de Articulos');
$assets->datatables();
$html->header();
?>


<div class="row">
<div class="col-md-12">

<h3><a href="<?php echo PATH; ?>vistas/lista.php">Registrar Artículo</a></h3><hr>

<form action="../controlador/agregar.php" method="POST" autocomplete="Off">

<div class="form-group">
<label>CÓDIGO</label>
<input type="text" name="codigo" required="" class="form-control" onchange="Mayusculas(this)" autofocus="">
</div>

<div class="form-group">
<label>DESCRIPCIÓN</label>
<input type="text" name="descripcion" required="" class="form-control" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label>UNIDAD</label>
<input type="text" name="unidad" required="" class="form-control" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label>CANTIDAD</label>
<input type="number"  step="any" name="cantidad" required="" class="form-control" >
</div>

<div class="form-group">
<label>PRECIO</label>
<input type="number"  step="any" name="precio" required="" class="form-control" >
</div>

<button class="btn btn-primary">Registrar</button>


</form>

</div>
</div>


<?php $html -> footer(); ?>