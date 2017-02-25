<?php $view->extend('layouts/admin.html.php') ?>

<?php $view['slots']->start('mt') ?>List <?= $plural ?><?php $view['slots']->stop() ?>

<?php $view['slots']->start('content') ?>
	<p>
		<a href="<?= $view['router']->path('admin.'.$plural.'.new') ?>" class="btn btn-primary">
			<i class="fa fa-plus"></i> ADD NEW
		</a>
	</p>

	<?php if(count($cruds) > 0 && !empty($config)) : ?>
		<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
			<thead>
	            <tr>
	            	<th><input type="checkbox" /></th>
	            	<?php foreach($config->display->index as $cdi) : ?>
	            	<th><?= $config->cols->$cdi->label ?></th>
	            	<?php endforeach; ?>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
	        	<?php foreach($cruds as $crud) : ?>
	            <tr class="odd">
	            	<td><input type="checkbox" /></td>
	            	<?php foreach($config->display->index as $cdi) : ?>
	            	<td>
		                <?= strip_tags($crud->$cdi) ?>
		        	</td>
	            	<?php endforeach; ?>
	                <td class="center">
	                	<a href="<?= $view['router']->path('admin.'.$plural.'.edit', ['id' => $crud->id]) ?>" class="btn btn-default btn-xs">
	                		<i class="fa fa-edit"></i> Edit
	                	</a> 

	                	<a href="<?= $view['router']->path('admin.'.$plural.'.delete', ['id' => $crud->id]) ?>" class="btn btn-default btn-xs">
	                		<i class="fa fa-trash"></i> Delete
	                	</a>
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

	
<?php $view['slots']->stop() ?>