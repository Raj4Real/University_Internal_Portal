<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css reg/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css reg/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="reg-style.css">
	
	
</head>
<body>
	

<nav>

    	<div class="cd-primary-nav">

		<h1>Registration</h1>

		<form action="connect.php" method="get">
   
    	<div class="accounttype">
      		<input type="radio" value="None" id="radioOne" name="account" checked/>
      		<label for="radioOne" class="radio" chec>Normal User</label>
      		<input type="radio" value="None" id="radioTwo" name="account" />
      		<label for="radioTwo" class="radio">Education</label>
      		<input type="radio" value="None" id="radioTwo" name="account" />
      		<label for="radioThree" class="radio">Research</label>
            <input type="radio" value="None" id="radioTwo" name="account" />
      		<label for="radioThree" class="radio">Extention</label>
    	
    	</div>
    
		<table>
    	<tr>
        	<td>First name</td>
            <td>Last name</td>
            
        </tr>
        
		<tr>
        	<td><input name="fname" type="text" size="20"/></td>
            <td><input name="lname" type="text" size="20"/></td>
        </tr>
        <tr>
        	<td>E-mail</td>
        </tr>
        <tr>
            <td><input name="email" type="text" size="20"/></td>
        </tr>
        <tr>
        	<td>User name</td>
        </tr>
        <tr>
            <td><input name="uname" type="text" size="20"/></td>
        </tr>
        <tr>   
            <td>Password</td>
        </tr>
        <tr>
            <td><input name="pass1" type="password" size="20"/></td>
        </tr>
	    <tr>   
            <td>Repeat password</td>
       	</tr>
       	<tr>
            <td><input name="pass2" type="password" size="20"/></td>
       	</tr>
		<tr>   
            <td>Designation</td>
       	</tr>
       	<tr>
            <td>
            	<select name="designation" class="text_field">
                        <option value="student">student</option>
                    	<option value="faculty">faculty</option>
                        <option value="scientist">scientist</option>
                    	<option value="user">user</option>
                </select>
            </td>
       	</tr>
   
        <tr>
        	<td>Gender</td>
        </tr>
        
        <tr>
                  <td>
          		<select name="gender" class="text_field">
                	<option value="male">male</option>
                    <option value="female">female</option>
                 </select>
          </td> 
         </tr>
         
        <tr>   
            <td>date of birth</td>
        </tr>
        
        <tr>
          <td>
          	          
          		<select class="text_field">
                	<option value="">1</option>
                    <option value="">2</option>
                 </select>
           
                
            
          		<select class="text_field">
                	<option value="">1</option>
                    <option value="">2</option>
                 </select>
                 
            
            
          		<select class="text_field">
                	<option value="">1993</option>
                    <option value="">1994</option>
                 </select>
          </td>
                  
          
        	</tr>
        
        	<tr>
       	  		<td colspan="2" align="center"><input type="reset" class="btn btn-primary" name="reset" /><input type="submit" class="btn btn-primary" name="submit" /></td>
          
        </tr>
	</table>            
            
	</form>

	</div>

</nav>
    

	<main class="cd-content">
		<!-- your content here -->
		<div class="cd-intro">
			
		</div>
	
	</main> <!-- cd-content -->
    

	<div class="cd-overlay-nav">
		<span></span>
	</div> <!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div> <!-- cd-overlay-content -->

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>

<script src="js reg/jquery-2.1.1.js"></script>
<script src="js reg/velocity.min.js"></script>
<script src="js reg/main.js"></script> <!-- Resource jQuery -->
</body>
</html>