<script type="text/javascript">
	#(document).ready(function() {
		var tbl = $('#js_table').DataTable({
			aoColumns:[
				{"bSortable": true},
				{"bSortable": true},
				{"bSortable": false}
			],
			dom: '<"datatable-header"f><"datatable-scroll"t><"datatable-footer"ip>',
			"ajax": '<?php echo base_url() ?>welcome/dataTable'
		});
	});
</script>