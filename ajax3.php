<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <div class="container">
        <div class="card mt-3">
            <div class="card-header">
              <center>
               <h3>Form Submit using Ajax in PHP MySQL Example</h3>
              </center>
            </div>
            
            <form id="form" class="p-2" method="post" action="submit-page.php">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="email" name="email" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" name="password" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary" class="submit">Submit</button>
                </form> 
            
            <div class="successMessage" style="display:none;"><b>Your form is submitted successfully.</b></div>
            
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#form').on('submit', function (e) {
                e.preventDefault();
                
                   $.ajax({
                   type:'POST',
                   url: 'submit-page.php',
                    
                   data: $('#form').serialize(),
                    success: function (data) {  
                        $(".successMessage").show();//this sort query/code is show success msg after submit the form
                                             
                        $("form").trigger("reset");    //this code show form reset after submit he form with ajax
                    }
                });
            });

        });
    </script>

</body>
</html>