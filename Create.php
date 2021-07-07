<!doctype html>
<html lang="en">
<head>
    <?php include "partials/_head.php" ?>
</head>
<body>
<?php include "partials/_navbar.php" ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2><i class="fa fa-plus"></i> SURVEY</h2>
                </div>

                <div class="panel-body">
                  <form action="controllers/store.php" method="POST">  
                       
				  <label for="name">User name:</label>
                            <input type="text" name="name" id=" Username" class="form-control" placeholder="Enter your name" required>

                            <label for="id" class="mt-10">Age:</label>
                            <input type="number" name="Age" id="Age" class="form-control" placeholder="Enter your Age" required>

      

                            <label for="image" class="mt-10">User image:</label>
                            <input type="file" name="image" id="User image" class="form-control" accept="image/*" required>
							
							
							
							
						 <label for="department" class="mt-10">User hepes:</label>
                            <textarea name="hepes" id="Userhepes" class="form-control" placeholder="Enter your hepes" required></textarea>
                        </div>
					
					
                        <button type="submit" class="btn btn-success btn-block mt-10"><i class="fa fa-plus"></i> Add user</button>
					
					</form>
					
					
					
					
					
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "partials/_footer.php" ?>
<script>
    $('#title').keydown(function() {
        let val = $(this).val();
        if(val.length >= "255") {
            alert("Too much characters for a title");
        }
    });
</script>
</body>
</html>