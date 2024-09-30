<!DOCTYPE html>
<html>

<head>
  <title>Ajax form submit without reloading page</title>
  <style type="text/css">
    form {
      text-align: center;
      padding: 26px;
      margin: 11px;
    }

    div {
      padding: 15px;
    }

    h1 {
      text-align: center;
    }
    #msg{
      color:red;
    }
  </style>
</head>

<body>
  <h1>This is the simple form using Ajax</h1>
  <form method="POST" action="submit-page.php">
    <div>
      <label>email</label>
      <input type="text" id="email" name="email">
    </div>
    <div>
      <label>password</label>
      <input type="text" id="password" name="password">
    </div>

<div id ="msg">
</div>
    <button type="submit" id="submit" name="submit">Submit</button>
  </form>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
function clickButton(){
    var email=document.getElementById('email').value;
    var password=document.getElementById('password').value;
    $.ajax({
        type:"post",
        url:"submit-page.php",
        data: 
        {  
           'email' :email,
           'password' :password
        },
        cache:false,
        success: function (html) 
        {
           alert('Data Send');
           $('#msg').html(html);
           e.preventDefault();
        }
    });
    return false;
 }
</script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.ajax({
    url: "demo_test.txt", 
    success: function(result){
     $("#div1").html(result);
    }});
  });
});
</script>
</head>
<body>

<div id="div1"><h2>Let jQuery AJAX Change This Text</h2></div>

<button>Get External Content</button>
</body>

</html>
<!-- <script type="text/javascript">
  $(document).ready(function () {
    $('#button').click(function (event) {
      
      event.preventDefault();
      var email = $('#email').val();
      var password = $('#password').val();
  
      $.ajax({
        type: "POST",
        url: "submit-page.php",
        data: { email: email, password: password },
        dataType: "json",
        success: function (result) {

        }
      });
    });
  });
</script> -->