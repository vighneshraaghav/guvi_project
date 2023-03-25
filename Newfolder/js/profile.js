function p_submit(){
$(document).ready(function() {
    var data ={phone:$("#phone").val(),
              dob:$("#dob").val(),
              age:$("#age").val()};
console.log(data);
  $.ajax({
    url: 'http://localhost:80/Newfolder/php/profile.php',
    type: 'POST',
    data: data,
    success:function(response){
      alert(response);
      if(response == "Updated"){
        window.location.reload();
      }
    }
  })
});
}