
<!-- <footer>
Copyright &copy; All rights reserved 2020
</footer> -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script>
     AOS.init();
    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );


}
var element = document.getElementById("chat_content");
send = document.getElementById("send_button");
element = document.getElementById("chat_content");
element.scrollTop = element.scrollHeight;
send.addEventListener("click", function(){
  if(element.scrollTop<element.scrollHeight)
  {
    element.scrollTop = element.scrollHeight;
  }
})
element.addEventListener("scroll", function(){
  if(element.scrollTop===element.scrollHeight){
    send.style.visibility="hidden";
  }
  else{
    send.style.visibility="visible";
  }
  console.log("scroll");
})

    </script>
  </body>
</html>
