
<!-- <footer>
Copyright &copy; All rights reserved 2020
</footer> -->
<?php

?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script>

     AOS.init();
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );


}
var element = document.getElementById("chat_content");
send = document.getElementById("send_button");
down = document.getElementById("down_button");
element = document.getElementById("chat_content");
element.scrollTop = element.scrollHeight;
send.addEventListener("click", function(){
  if(element.scrollTop<element.scrollHeight)
  {
    element.scrollTop = element.scrollHeight;
  }
})
down.addEventListener("click", function(){
  if(element.scrollTop<element.scrollHeight)
  {
    element.scrollTop = element.scrollHeight;
  }
})


$("#send_msg").submit(function(event){
  var message = $("#client_message").val();
  event.preventDefault();
  $.post("chat.php",{msg:message})
  $("#client_message").val("");

})
function check_messages(){
 console.log("get messages");
}
setInterval(check_messages,1000);
    </script>
  </body>
</html>
