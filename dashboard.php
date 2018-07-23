<?php 
session_start();
if(!isset($_SESSION['username']) and $_SESSION['admin'] != "yes"){
    header('location:./login.php');
}
include "header2.php"; ?>

<div id="PersonTableContainer"></div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#PersonTableContainer').jtable({
            title: 'Table of people',
            paging: true,
            pageSize: 10,
            actions: {
                listAction: './scripts/admissions.php',
                // createAction: './status/admissions.php',
                updateAction: './scripts/update.php',
                deleteAction: './scripts/delete.php'
            },
            fields: {
                id: {
                    title: "id",
                    key: true,
                    list: true,
                    edit: false
                },
                firstname: {
                    title: 'Firstname',
                    width: '40%',
                    edit: false
                },
                lastname: {
                    title: 'Lastname',
                    width: '20%',
                    edit: false
                },
                trackid: {
                    title: 'Track Id',
                    width: '30%',
                    create: false,
                    edit: false
                },
                status: {
                    title: 'status',
                    width: '20%',
                    edit: true,
                }
            }
        });
    $('#PersonTableContainer').jtable('load');
    });
</script>
</main>
<footer class="page-footer" style="margin-top:2%;background-color:#28313d;color:white;">
          <div class="container">
            <!-- <div class="row">
              <div class="col l6 s12">
                <h5 class="">Footer Content</h5>
                <p class="">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="">Links</h5>
                <ul>
                  
                  <li><a class="" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div> -->
          <div class="footer-copyright" style="background-color:#28313d;color:white;">
            <div class="container">
            © 2018 Copyright Text
            
            </div>
          </div>
        </footer>
        </body>
        </html>