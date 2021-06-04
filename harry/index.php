





<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
</head>    
<body>    
    <h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" action="welcome.php" method="post">    
        <label><b>User Name     
        </b>    
        </label>    
        <input type="text" name="uname" id="uname" placeholder="username">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="pass" id="pass" placeholder="password">    
        <br><br>    
          
       <tr>
           <td colspan="2" id= "login" ><input type="submit" name = "login" value="login">  </td>
</tr>
          
    </form>     
</div>    

<style>

body
{  
    margin: 0;  
    padding: 0;  
    background-color: #74FFEE;
    font-family: 'Arial';  
    
}  
.login{  
        width: 382px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #04B9A3;  
        border-radius: 15px ;  
        font-weight: bold;
}  
h2{  
    text-align: center;  
    color: #277582;  
    padding: 20px;  
    font-weight: bold;
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
    font-weight: bold;
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    font-weight: bold;
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
    font-weight: bold;
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: blue;  
    font-weight: bold;
  
  
}  
span{  
    color: white;  
    font-size: 17px;  
    font-weight: bold;
}  
a{  
    float: right;  
    font-weight: bold;
    background-color: grey;  
}  


</style>















</body>    
</html>     