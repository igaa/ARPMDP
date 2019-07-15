$(document).ready(function() {
	var dataTable = $('#tablegrid').DataTable( {
		"processing": true,
		"serverSide": true,
		"ajax":{
			url :"../../getalumni.php", // json datasource
			type: "post",  // method  , by default get
			error: function(){  // error handling
				$(".tablegrid-error").html("");
				$("#tablegrid").append('<tbody class="tablegrid"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
				$("#tablegrid_processing").css("display","none");
							
			}
		}
	} );
} );