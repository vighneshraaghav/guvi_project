function login(){
  $(document).ready(function() {
      var data ={email:$("#email").val(),
                password:$("#password").val()};
  console.log(data);
    $.ajax({
      url: 'http://localhost:80/Newfolder/php/login.php',
      type: 'POST',
      data: data,
      success:function(response){
        if(response == "Login Successful"){
          window.location.href='http://localhost/Newfolder/profile.html'
        }
        else{
          alert("Wrong Password");
          exit;
        }
      }
    })
  });
  }