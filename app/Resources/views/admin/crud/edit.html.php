<?php $view->extend('layouts/admin.html.php') ?>

<?php $view['slots']->start('mt') ?>Edit <?= $singular ?><?php $view['slots']->stop() ?>

<?php $view['slots']->start('content') ?>
	<div class="row">
		<div class="col-lg-9">
			<?= $view['form']->start($form, [
				'attr' => ['novalidate' => 'novalidate']
			]) ?>
				
				<?php foreach($config->cols as $k => $v) : ?>
					<div class="form-group row">
						<div class="col-lg-12">
							<?= $v->label ?><br/>
							<?= $view['form']->widget($form[$k], [
								'attr' => ['class' => 'form-control']
							]) ?>

							<font color="red"><?= $view['form']->errors($form[$k]) ?></font>
						</div>
					</div>
				<?php endforeach; ?>
				
				<div class="form-group row">
					<div class="col-lg-12">
						<input type="submit" class="btn btn-primary" value="SAVE" /> 
						<a href="<?= $view['router']->path('admin.'.$plural) ?>" class="btn btn-primary">BACK</a>
					</div>
				</div>

			<?= $view['form']->end($form) ?>
		</div>
	</div>	
<?php $view['slots']->stop() ?>