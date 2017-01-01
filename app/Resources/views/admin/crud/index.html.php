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
	                	Edit / Delete
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