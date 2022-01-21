<html>
<head>
<style>
    
    
    
    /*Top bar*/
    body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color:bisque;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
    
    
    /*Top bar*/
.out1{
              margin: auto;
              width: 50%;
              height: 520px;
              background:linear-gradient(
                   rgba(255, 99, 71, 0.5), 
                    rgba(255, 99, 71, 0.5));
          }
          .in_reg{
                margin-left: 45px;
                width: 80%;
                height:40px;
                outline: none;
                border: none;
                font-size: 17px;
                padding: 7px;
            }
          .btn_reg{
                 width: 80%;
                height:43px;
                margin-left: 45px;
                border-radius: 5px;
                border: none;
                outline: none;
                font-size: 17px;
                background: rgb(0, 215, 132);
                border: none;
                
            }
          @media screen and (min-width:900px){
              .in_reg{
                margin-left:130px;
                width: 70%;
                height:40px;
                outline: none;
                font-size: 17px;
                padding: 7px;
                border: none;
            }
              .btn_reg{
                 width: 70%;
                height:43px;
                margin-left:130px;
                border-radius: 5px;
                border: none;
                outline: none;
                font-size: 17px;
                background: rgb(0, 215, 132);
                border: none;
                
            }
          }            

</style>
</head>
<body>

<div class="out1 reg">
           <br>
           <h1 style="font-size:37px;color:crimson;"><center><b>sign up Page</b></center></h1>
    <br><br>
           <form method="post" action="insert_user.php">
<input id="usr" class="in_reg" style="padding-left:auto " type="text" placeholder="Name" autocomplete="off" name="nam" required>
    <span style="color:white;font-weight: bold;text-align: center" id="nmm"></span>
                         <br><br>

               <input id="lname" class="in_reg" style="padding-left:auto " type="text" placeholder="Email" autocomplete="off" name="Email" required >
               <br><br>

		 <input id="pass" class="in_reg" style="padding-left:auto " type="password" placeholder="Password" autocomplete="off" name="pass" required >
               <br><br>

               <button class="btn_reg" type="submit" name="insert" id="insert"><b>Submit</b></button> 
           </form>
        </div>
		
		<div> 
		<br><br>
		<br><br>
		</div>
		
		
		
		
		
<br><br>

</body>
</html>