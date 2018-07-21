<?php include "header.php"; ?>


<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Register</a>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Create New Admission</h4>
      <form action="./scripts/newAdd.php" class="reg-form" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Firstname" name="firstname" id="firstname" type="text" class="validate">
          <label for="firstname">Firstname</label>
        </div>
        <div class="input-field col s6">
          <input name="lastname" placeholder="Lastname" id="lastname" type="text" class="validate">
          <label for="lastname">Lastname</label>
        </div>
        <div class="input-field col s6">
          <input name="email" placeholder="email" id="email" type="text" class="validate">
          <label for="email">Email</label>
        </div>
        
        <div class="input-field col s6">
          <button type="submit">Register</button>
        </div>
      </div>
    </div>
    </div>
    </form>
    </div>
  </div>
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
          <button>Search<i class="material-icons">search</i></button>
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
            //   $('.modal').close();
              $('main').prepend(result.message);
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
          },
          error: function(err){
            //   alert(err);
            console.log(err);
          }
      })
  })
  </script>


<?php include "footer.php"?>