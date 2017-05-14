<?php 

include('../autoload.php');
$assets = new Assets();
$html   = new Html();
$assets ->principal('Actualizar');
$assets->datatables();
$html->header();
$articulos = new Articulos($_GET['codigo']);
?>
<h3><a href="<?php echo PATH; ?>vistas/lista.php">Actualizar Artículo</a></h3><hr>

<?php if (strlen($articulos->consulta('codigo'))>0): ?>
<div class="row">
<div class="col-md-12">

<form action="../controlador/actualizar.php" method="POST" autocomplete="Off">

<div class="form-group">
<label>CÓDIGO</label>
<input type="text" name="codigo" required="" class="form-control" value="<?php echo $articulos->consulta('codigo'); ?>" readonly onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label>DESCRIPCIÓN</label>
<input type="text" name="descripcion" required="" class="form-control" value="<?php echo $articulos->consulta('descripcion'); ?>" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label>UNIDAD</label>
<input type="text" name="unidad" required="" class="form-control" value="<?php echo $articulos->consulta('unidad'); ?>" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label>CANTIDAD</label>
<input type="number"  step="any" name="cantidad" required="" class="form-control" value="<?php echo round($articulos->consulta('cantidad'),2); ?>">
</div> 

<div class="form-group">
<label>PRECIO</label>
<input type="number"  step="any" name="precio" required="" class="form-control" value="<?php echo round($articulos->consulta('precio'),2); ?>">
</div>

<button class="btn btn-primary">Registrar</button>


</form>

</div>
</div>	
<?php else: ?>
<p class="alert alert-warning">El código no existe</p>
<?php endif ?>




<?php $html -> footer(); ?>