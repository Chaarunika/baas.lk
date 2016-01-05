$(document).ready(function(){
	$("#submit").click(function(){
		var jobtype = $("#jobtype").val();
		var jobdes = $("#jobdes").val();
		var area = $("#area").val();
		var address = $("#address").val();
		var telnum = $("#telnum").val();
		if(jobdes == '' || address == '' || telnum == ''){
		alert("Plese Fill Blank Fields..");		
		}
		else{
		$.post("postjob.php",{
			jobtype1: jobtype,
			jobdes1: jobdes,
			area1: area,
			address1: address,
			telnum1: telnum,
		},function(data){
			alert(data);
			$('#form')[0].reset();
		});
	}
	});
});