<?php 
include('functions.php');
?>	
<!DOCTYPE html>
<html lang="en">

<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<style>


</style>   
</head>

<body>
   	
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <legend> Import CSV file data </legend>
    </div>

    <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
	
	                       
						<input type="text" id="dbname" class="fadeIn second" name="dbname" placeholder="Table Name">
						   
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" required>
                            </div>
                        </div>
						
						    

				<div id="formFooter">      
				  <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading..." onclick="timer();" >Upload</button>
				  <span id="h">00</span>:<span id="minutes">00</span>:<span id="seconds">00</span>
				</div>
	</form>

  </div>
</div>

</body>

</html>



<script>
	var sec = 0;
	
	
function timer()
{
   setTimeout(timer, 1000);
   document.getElementById('minutes').innerHTML = pad(parseInt(sec / 60, 10));
   document.getElementById('seconds').innerHTML = pad(++sec % 60);
   
}

function pad(val) {
    return (val > 9) ? val : '0' + val;
}

</script>
