<?php include "header.php"; ?>

<div id="message"><ul id="message-list"></ul></div>
<!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Register</a> -->
<div id="banner"></div>
<!-- // - -->
<div class="row">
    <form class="search-form" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" name="track_id" id="track_id" type="text" class="validate">
          <label for="track_id">Track Id</label>
        </div>
        <div class="input-field col s6">
          <!-- <input id="search" type="button" class="validate">
          <label for="search">Search<i class="material-icons">search</i></label> -->
          <button class="btn">Search<i class="material-icons">search</i></button>
        </div>
      </div>
      </div>
    </form>
  </div>

  <script>
//   function myFunction() {
//   /* Get the text field */
//   var copyText = document.getElementById("myInput");

//   /* Select the text field */
//   copyText.select();

//   /* Copy the text inside the text field */
//   document.execCommand("copy");

//   /* Alert the copied text */
//   alert("Copied the text: " + copyText.value);
// }
  $('.reg-form').on('submit',function(e){
      e.preventDefault();
      $.ajax({
          url: './scripts/newAdd.php',
          method: 'post',
          dataType: 'json',
          data: $('.reg-form').serialize(),
          success: function(result){
              console.log(result);
              $('#message-list').html("");
              $('#message-list').append("<li>"+result.message+"</li>");
            //   var toastHTML = '<span>'+result.message+'</span><button onclick='+myFunction()+' class="btn-flat toast-action">Copy</button>';
            //     M.toast({html: toastHTML});
              alert(result.message);
          },
          error: function(err){
            //   alert(err);
            //   console.log(err);
          }
          
      })
  })
  $('.search-form').on('submit',function(e){
      e.preventDefault();
      $.ajax({
          url: './scripts/search.php',
          method: 'post',
          dataType: "json",
          data: $('.search-form').serialize(),
          success: function(result){
              console.log(result);
              $('#message-list').html("");
              $('#message-list').append("<li>"+result.message+"</li>");
          },
          error: function(err){
            //   alert(err);
            console.log(err);
          }
      })
  })
  </script>


<?php include "footer.php"?>