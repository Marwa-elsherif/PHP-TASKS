<!DOCTYPE html>
    <html>
        <head>
             <meta charset="utf-8">
            <title>
                Day2 Tasks
            </title>
            <style>
                label{padding:30px;font-weight:bold};
            </style>
        </head>
        <body>
            <center><div>
            
            
<form action="done.php" method="post" >
<div style="background-color: #DAF7A6;border: 1px solid black;width:500px; height:600px">
    <br><br>
             <label><b>First Name</b></label><input style="width:300px;" type="text"name="fname"><br><br>
             <label><b>Last Name</b></label> <input style="width:300px;" type="text"name="lname"><br><br>
             <label style="padding-left: 30px"><b>Adress</b></label>
             <input style="width:300px; height:60px;margin-left: 25px" type="text"name="adress"><br><br>
             
             <label style="margin-left:10px">Country</label>
                    <select style="width: 300px">
                    <option>Egypt</option>
                    <option>USA</option>
                    <option>Syria</option>
                   </select><br><br>
                   
                    <label style="padding-left:0px;margin-left: 0">Gender</label>
                        <input style="margin-left: 100px" type ="radio" name ="Gender[]" value="male">male
                        <input  style="margin-left: 60px" type ="radio" name ="Gender[]" value= "female">female<br><br>
                        
                    <label style="padding-left:0px;margin-left: 0"><b>your Skills</b></label>
                         <input style="margin-left: 90px" type ="checkbox" name ="skill[]" value="PHP"/>PHP
                         <input  style="margin-left: 80px" type ="checkbox" name ="skill[]" value="J2SE"/>J2SE<br>
                         <input style="margin-left: 210px"type ="checkbox" name ="skill[]" value="MYSQL"/>MYSQL
                         <input style="margin-left: 50px"type ="checkbox" name ="skill[]" value="PGSQL"/>PGSQL<br><br>
                        
                    <label style="padding:26px">user name</label> <input style="width:300px;" type="text"name="name"><br><br>
                    <label style="padding:27px">password</label> <input style="width:300px;" type="password"name="password"><br><br>
                    <label style="padding:18px">Department</label> <input style="width:300px;" type="text"name="Department"><br>
                   
                   
                        
                        <p style="padding-left:110px">sh68Sa</p>
                        <p style="padding-left: 100px"> please insert the code in the below box </p>
                         <input style="width:140px;margin-left:100px" type="text" name="code"><br><br>
                        
                   
                   

                        <input style="margin-left: 100px;margin-right:30px" type="submit" value="Submit">

                                <input type="Reset" value="Reset">
</div>
</form>
</div></center>
 </body>
    </html>