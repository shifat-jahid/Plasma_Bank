<?php
	require_once "./includes/header.php"; 
	require "includes/home_menu.php" 
?>
	
<!DOCTYPE html>
<html lang="en">
    <title>Admin Panel</title>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    
</head>
    <body>
             <h1 align-texts:30px>Welcome Admin</h1>
             <br>
            <h4> Manage Posts </h4>
   <div>
  
        <br>
           <form> 
            <input type="button" value="Manage Customer Posts" onclick="mnCustomerPost()" class="btn btn-success">
            </form>
        </div>
           <td></td>
         <div class="header">
     
            <td></td>
            <br>
            <input type="button" value="Log out" onclick="logoutfn()" class="btn btn-danger">
       </div>
        <script>
        function logoutfn()
            {
                location.assign("Admin_signout.php");
            }
            function mnCustomerPost()
            {
                location.assign("Manage_customer_post.php");
            }
        </script>
    
</body>    
</html>
