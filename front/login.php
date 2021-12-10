<form class="col s9">
                        <div class="row">
                            <div class="input-field col s3">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                            <div class="input-field col s3">
                                <i class="material-icons prefix">vpn_key</i>
                                <input id="icon_telephone" type="password" class="validate">
                                <label for="icon_telephone">Password</label>
                            </div>
                            <div class="input-field col s3">
                                <a class="waves-effect waves-light btn-small">Login</a>
                            </div>
                        </div>
                    </form>


                    	<!--CREACION DEL LOGIN-->
<!-- <html>
<head>
<link href="login_style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
function do_login()
{
 var username=$("#username").val();
 var password=$("#password").val();
 if(username!="" && password!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'do_login.php',
  data:{
   do_login:"do_login",
   username:username,
   password:password
  },
  success:function(response) {
  if(response=="success")
  {
    window.location.href="index.php";
  }
  else
  {
    $("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
</script>
</head>
<body>
<div id="wrapper">

<div id="login_form">
 <p id="login_label"></p>
 <form method="post" action="do_login.php" onsubmit="return do_login();">
  <input type="text" name="emailid" id="emailid" placeholder="Enter Email">
  <br>
  <input type="password" name="password" id="password" placeholder="***********">
  <br>
  <input type="submit" name="login" value="DO LOGIN" id="login_button">
 </form>
</div>

</div>
</body>
</html> -->