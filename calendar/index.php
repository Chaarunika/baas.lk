<!DOCTYPE html>
<html>
<head>
<style>
#spanhovering {
    cursor: pointer;
}
#divtoshow {
    border: 1px solid #000000;
    box-shadow: 2px 5px 5px #7c7c7c;
	background-color: #ffffff;
    position: absolute;
	height:100px;
	width:200px;
    display: none;
}

#divinside {
    border-bottom: 1px solid #cccccc;
	background-color: #f0f0f0;
    position: absolute;
	top:4px;
	height:30px;
	width:198px;
    display: inherit;
}

#divinsidebody {
    border-bottom: 1px solid #cccccc;
    position: absolute;
	top:40px;
	left:60px;
	height:100px;
	width:198px;
    display: inherit;
}

#divinsideimage{

    position: absolute;
	top:40px;
	height:50px;
	width:50px;
    display: inherit;

}



</style>


<span id="spanhovering">click</span>

<div id="divtoshow" style="display:none">
<div id="divinside">

title

	<div id="divinsidebody">
	guyguii
	</div>
	
	<div id="divinsideimage"><img width="50" height="50" src="helmet.png">
	</div>

</div>



<script src="jquery.min.js"></script>
<script>
$("#spanhovering").hover(function(event) {
    $("#divtoshow").css({top: event.clientY}).show();
}, function() {
    $("#divtoshow").hide();
});
</script>




<br><br>



</body>
</html>
