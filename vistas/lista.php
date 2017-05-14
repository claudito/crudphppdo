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

<div class="form-group">
<a href="registrar.php" class="btn btn-primary">Registrar Articulos</a>
</div>

</div>
</div>

<div class="row">
<div class="col-md-12">
<?php 
$articulos   =  new Articulos();
if (count($articulos->lista())> 0): ?>
<div class="table-responsive">
	<table id="consulta" class="table table-bordered table-condensed">
		<thead>
			<tr>
				<th>CÓDIGO</th>
				<th>DESCRIPCIÓN</th>
				<th>UNIDAD</th>
				<th>CANTIDAD</th>
				<th>PRECIO</th>
				<th>FECHA</th>
				<th>ACCIONES</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($articulos->lista() as $key => $value): ?>
		<tr>
		<td><?php echo $value['codigo']; ?></td>
		<td><?php echo $value['descripcion']; ?></td>
		<td><?php echo $value['unidad']; ?></td>
		<td><?php echo round($value['cantidad'],2); ?></td>
		<td><?php echo round($value['precio'],2); ?></td>
		<td><?php echo date_format(date_create($value['FECHA_CREACION']), 'd/m/Y H:i:s');?></td>
		<td>
		<a href="../vistas/actualizar.php?codigo=<?php echo $value['codigo']; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-refresh"></i> Actualizar</a>
		<a href="../controlador/eliminar.php?codigo=<?php echo $value['codigo'] ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>
		</td>
		</tr>
		<?php endforeach ?>
		</tbody>
	</table>
	<script>
	$(document).ready(function(){
	$('#consulta').DataTable();
	});
	</script>
</div>
<?php else: ?>
<p class="alert alert-warning">No hay articulos registrados</p>
<?php endif ?>
</div>
</div>


<?php $html -> footer(); ?>