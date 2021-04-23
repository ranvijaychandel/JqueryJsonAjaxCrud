<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>JSONCRUDAJAX</title>
</head>
<body>
<div class="container">
	<div class="row">

		<div class="col-md-4">

			<div class="" id="formdata2">
			<h3>Add and Update Data</h3>

			<form id="formdata " class="form-group">
				<input type="text" name="name" id="name" class="form-control mb-2">
				<input type="email" name="email" id="email" class="formEmail form-control mb-2">
				<input type="submit" onclick="addRecord();" value="save" class="btn btn-primary">
			</form>
			<div id="result"></div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="" id="fetch"></div>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">

	// 1: Check email duplicate in database
  $( document ).ready(function() {
    $('.formEmail').on('change', function() {
        //ajax request
        $.ajax({
            url: "checkmail.php",
            data: {
                'email' : $('.formEmail').val()

            },
            dataType: 'html',
            success: function(data) {
            		$("#result").html(data);
            },
            error: function(data){
                //error
            }
        });

    });	
    })	
	// 2: Display Function using ajax
$(document).ready(function fetchData()
			{			  
			    $.ajax({url: "display.php", 
			    			success: function(result)
			    		{
			      			$("#fetch").html(result);
			    		}
			    	});
			 
			});
	
	// 3: Insert Data Into Database
	function addRecord() {
	 event.preventDefault();
		$.ajax({
            url: "insert.php",
            type:'post',
            data: {
                'name' : $('#name').val(),
                'email' : $('#email').val(),
            },
            dataType: 'html',
            success: function(data) {
                    $("#result").html(data);
                    fetchData();
            },
            error: function(data){
                //error
            }
        });

	}

// 4: select update function
function selectUpdate(id) {
	$.ajax({
		url:'selectupdate.php',
		method:'post',
		data:{
			id:id
		},
		success: function(data) {
            		$("#formdata2").html(data);
            },
            error: function(data){
                //error
            }

	});
}

// 5: saveupdate Function
function saveUpdate(id) {
	$.ajax({
		url:'saveupdate.php',
		method:'post',
		data:{
			id:id,
			'name' : $('#name').val(),
            'email' : $('#email').val()
		},
		success: function (data) {
			$("#result").html(data);
			
			fetchData();
			},
			error: function (data) {
				alert('error ');
			}

	});

	}

// 6: delete function 
	function deleteData(id) {
	 
		$.ajax({
            url: "delete.php",
            type:'post',
            data: {
                'id' : id                
            },
            dataType: 'html',
            success: function(data) {
                    $("#result").html(data);
                    fetchData();
                    // alert(id);
            },
            error: function(data){
                //error
            }
        });

	}
</script>