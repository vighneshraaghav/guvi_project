function submit(){
$(document).ready(function() {
    var data ={name:$("#name").val(),
              email:$("#email").val(),
              password:$("#password").val()};
console.log(data);
  $.ajax({
    url: 'http://localhost:80/Newfolder/php/register.php',
    type: 'POST',
    data: data,
    success:function(response){
      if(response == "Registration Successful"){
        window.location.href='http://localhost/Newfolder/profile.html'
      }
    }
  })
});
}