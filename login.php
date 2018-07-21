<?php include "header.php"; ?>

<div class="row">
    <form class="login-form" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Username" name="username" id="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="password" name="password" id="password" type="password" class="validate">
          <label for="password">password</label>
        </div>
        <div class="input-field col s6">
          <!-- <input id="search" type="button" class="validate">
          <label for="search">Search<i class="material-icons">search</i></label> -->
          <button type="submit" class="btn">Submit</button>
        </div>
      </div>
      </div>
    </form>
  </div>


<script>
$('.login-form').on('click',function(e){
    e.preventDefault();
    $.ajax({
        method:'post',
        url: "./scripts/login.php",
        data: $('.login-form').serialize(),
        dataType: "json",
        success: function(result){
            console.log(result);
        },
        error: function(err){
            console.log(err);
        }
    })
})
</script>

<?php include "footer.php"; ?>