
<html>
	<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	</head>
	
	<script>
	
	function readScript(){
		$.ajax({url: "doc.Que", success: function(result){
				$('#files').html("Files in que: <br>" + result.replace(/(?:\r\n|\r|\n)/g, '<br />') + "<br>");
        	}
        });
	}
	
	function writeScript2(){
		   $.ajax({
            type: 'post',
            url: 'scriptAdder.php',
            data: $('#urlIn'),
            success: function () {alert($('#urlIn'));}
          });
	}
	function writeScript(){
		var url = $("#urlIn").val();
		   $.post('scriptAdder.php',{urlIn:url}, function(response){});
	}
	
	$(document).ready(function(){
		 readScript();
		 $("button").click(function(){
			writeScript();
							    
    	});	
    	
    });
</script>	

	<body>
				
	<div id="files"></div>
	<div>
		<form>
			<input type="text" id="urlIn">
			<button id="add">save</button>
		
		</form>
			
		
	</div>


	</body>

	
	
</html>

