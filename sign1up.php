<html>
<style>
    input[type=text],
    input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 0px solid #2dfd0c;
        border-radius: 50px;
        box-sizing: border-box;
        border-style: groove;
        color: rgb(4, 255, 4);
        background-color: rgb(213, 212, 212);
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }

    input[type=submit] {
        width: 90%;
        background-color: #FF4766;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: 0px solid #25ff03;
        border-radius: 50px;
        cursor: pointer;
        border-style: groove;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .container {
        border-radius: 2px;
        background-color:  #e6e8e6;
        border: 0px groove #25ff03;
        width: 44%;
        height: 340px;
        margin: auto;
        /* background-color: #FF4766; */
        margin-top:130px;
        border:0px solid red;
    }

    #div2 {
        border-radius: 2px;
        background-color: #f2f2f2;
        padding: 20px;
        border: 0px groove #25ff03;
        text-align: right;
    }

    h3 {
        color: rgb(21, 21, 21);
        text-align: left;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }
    h2 {
        color: rgb(254, 252, 252);
        text-align:right;
        margin-top:  90px;
        margin-right:70px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }
    h5 {
        color: rgb(254, 252, 252);
        text-align:right;
        margin-top:  20px;
        margin-right:90px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }
   #sign  {
        background-color: #FF4766;
        color: white;
        padding: 14px 20px;
        margin-top: 2px;
        border: 1px solid #fefffe;
        border-radius: 50px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        width: 100px;
    }

    .left {
        border-radius: 2px;
        text-align: left;
        width: 45%;
        background-color: #fffdfd;
        padding: 20px;
        border: 0px groove #25ff03;
        height: 300px;
        margin-left: 1px;
       float: left;
    }

    .right {
        border: 0px solid red;
        display:inline-block;
        width: 45%;
        height:337px;
        background-color: #FF4766;
        text-align: center;

    }

    input[type=checkbox] {
        background-color: #FF4766;
    }
    body{
        border: 1px groove firebrick;
        background-color: #e6e8e6;
    }
   
</style>

<body>
    

    <div class="container">
        <!-- Left section-->
        <div  class="left">
            <h3>Sign in</h3>
            <form action="/action_page.php">
                <label for="fname">User Name</label>
                <br>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <br>
                <label for="lname">password</label>
                <br>
                <input type="password" id="lname" name="lastname" placeholder="User password">
                <br>
                <input type="submit" value="Submit">
                <br>
                <input type="checkbox" name="remember me">
                Remember me
                <input type="checkbox" value="forgot password">
                Forgot password
            </form>
            
        </div>
    <!-- Right section-->
        <div class="right">
            
            <h2> Welcome to login</h2>
            <h5>don't have an account?</h5>
            <input type="submit" id="Sign" value="Sign up">
        </div>
    </div>

</body>

</html>