<?php 
// session_start();
// if(!isset($_SESSION['username']) and $_SESSION['admin'] != "yes"){
//     header('location:./login.php');
// }
include "header.php"; ?>

<div id="PersonTableContainer"></div>
      <script type="text/javascript">
        $(document).ready(function(){
              $('#PersonTableContainer').jtable({
                title: 'PHP Crud with the help of Ajax',
                pageSize:5,
                paging:true,
                sorting: true,
                defaultSorting : 'fname ASC',
                actions:{
                    listAction:'process.php?action=list',
                    createAction:'process.php?action=create',
                    updateAction:'process.php?action=update',
                    deleteAction:'process.php?action=delete',
                },
                fields:{
                    emp_id:{
                        key:true,
                        create:false,
                        edit:false,
                        list:false
                    },
                    fname:{
                        title:'First Name',
                        width:'35%'
                    },
                    lname:{
                        title:'Last Name',
                        Width:'35%'
                    },
                    salary: {
                        title:'Salary',
                        width:'35%',
                    }
                }
            });
            $('#employee').jtable('load');
        });
      </script>







<?php include "footer.php"; ?>