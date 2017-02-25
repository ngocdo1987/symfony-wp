<?php $view->extend('layouts/admin.html.php') ?>

<?php $view['slots']->start('mt') ?>Add <?= $singular ?><?php $view['slots']->stop() ?>

<?php $view['slots']->start('content') ?>
	<div class="row">
		<?= $view['form']->start($form, [
			'attr' => ['novalidate' => 'novalidate']
		]) ?>
			<div class="col-lg-9">
				<?php foreach($config->cols as $k => $v) : 
					$attr = [
						'class' => 'form-control'
					];

					switch($v->type) {
						case 'textarea':
							$attr['rows'] = 8;
							break;
						case 'ckeditor':
							$attr['rows'] = 8;
							//$attr['id'] = 'ckeditor';
							break;	
						case 'tinymce':
							$attr['rows'] = 8;
							//$attr['id'] = 'tinymce';
							break;	
						case 'summernote':
							$attr['rows'] = 8;
							$attr['class'] = 'form-control summernote';
							break;	
					}
				?>
					<div class="form-group row">
						<div class="col-lg-12">
							<?= $v->label ?><br/>
							<?= $view['form']->widget($form[$k], [
								'attr' => $attr
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
			</div>

			<div class="col-lg-3">
				<?php if(isset($config->relation->nn) && count($config->relation->nn) > 0) : ?>
					<?php foreach($config->relation->nn as $singular_model => $v) : ?>
						<h3><?= ucfirst($singular_model) ?></h3>

						<?php foreach($$singular_model as $sm) : 
							$target_label = $v->target_label;
						?>
							<input type="checkbox" name="<?= $singular_model ?>[]" value="<?= $sm->id ?>" /> <?= $sm->$target_label ?> <br/>
						<?php endforeach; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		<?= $view['form']->end($form) ?>
	</div>	
<?php $view['slots']->stop() ?>