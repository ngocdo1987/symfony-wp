<?php $view->extend('layouts/admin.html.php') ?>

<?php $view['slots']->start('mt') ?>List <?= $plural ?><?php $view['slots']->stop() ?>

<?php $view['slots']->start('content') ?>
	<?php if(count($cruds) > 0 && !empty($config)) : ?>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
	            <tr>
	            	<?php foreach($config->display->index as $cdi) : ?>
	            	<th><?= $config->cols->$cdi->label ?></th>
	            	<?php endforeach; ?>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach($cruds as $crud) : ?>
	            <tr class="odd">
	            	<?php foreach($config->display->index as $cdi) : ?>
	            	<td>
		                <?= strip_tags($crud->$cdi) ?>
		        	</td>
	            	<?php endforeach; ?>
	                <td class="center">
	                	<a href="<?= $view['router']->path('admin.'.$plural.'.edit', ['id' => $crud->id]) ?>" class="btn btn-primary btn-xs">Edit</a> 

	                	<a href="<?= $view['router']->path('admin.'.$plural.'.delete', ['id' => $crud->id]) ?>" class="btn btn-danger btn-xs">Delete</a>
	                </td>
	            </tr>
	            <?php endforeach; ?>
	        </tbody>
		</table>
	<?php else : ?>
		<center>
			<font color="red">
				No <?= $plural ?> existed!
			</font>
		</center>
	<?php endif; ?>

	<a href="<?= $view['router']->path('admin.'.$plural.'.new') ?>" class="btn btn-primary">ADD NEW</a>
<?php $view['slots']->stop() ?>