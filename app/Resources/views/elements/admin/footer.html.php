  
    <!-- jQuery -->
    <script src="<?= $view['assets']->getUrl('admin/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= $view['assets']->getUrl('admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= $view['assets']->getUrl('admin/vendor/metisMenu/metisMenu.min.js') ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= $view['assets']->getUrl('admin/dist/js/sb-admin-2.js') ?>"></script>

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script type="text/javascript">
		$('select.select2').select2();
	</script>

	<!-- CKEditor -->
	<script src="<?= $view['assets']->getUrl('js/ckeditor/ckeditor.js') ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			CKEDITOR.replace( 'ckeditor' );
		});
	</script>

	<!-- Summernote -->
	<link href="<?= $view['assets']->getUrl('js/summernote/summernote.css') ?>" rel="stylesheet">
	<script src="<?= $view['assets']->getUrl('js/summernote/summernote.js') ?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300
            });
        });
    </script>
</body>

</html>