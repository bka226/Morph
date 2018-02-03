<html>
<!DOCTYPE html>
<head>
<link  rel="stylesheet"   href="css/main.css"  >
</head>
<body id= signupbody>
<div class="container">
	
    <form id="signup" class="form-horizontal" name = "validation" action="" method="post" onsubmit="ValidationValue()">
        <div>
            <div class="form-group" id="centerbox">
                <label class="control-label col-sm-4" >Required Information</label><br/> <br/>
				
                <div class="col-sm-7"></div>
			</div>

            <div class="form-group" id="centerbox">
                <label class="control-label col-sm-5" >Name</label>
				
                <div class="col-sm-7">
					<input type="text" name="name" size="30" id="signup_Name"/></label>
				</div><br/>
            </div>
			
			<div class="form-group" id="centerbox">
                <label class="control-label col-sm-5">Email</label>
				
				<div class="col-sm-7">
					<input type="text" name="email" size="30" id="signup_Email"/></label>
				</div><br/>
            </div>

            <div class="form-group" id="centerbox">
                <label class="control-label col-sm-5" >Password</label>
				
				<div class="col-sm-7">
					<input type="password" name="password" size="30" id="signup_Password"/></label>
                </div><br/>
            </div>
			
            <div class="form-group" id="centerbox">
                <label class="control-label col-sm-5" >Confirm password</label>
				
                <div class="col-sm-7">
					<input type="password" name="confirmpassword" size="30" id="signup_ConfirmPass"/></label>
                </div><br/>
            </div>

            <div class="form-group" id="centerbox">
                <div class="control-label col-sm-6">
					<input class="btn btn-default" type="submit" name="submit" value="Register" id="signup_Submit"/>
                </div>
            </div>
             <div class="form-group" id="backtopage">
                <div class="control-label col-sm-6">
                   <button> <a href="index.php" > Back to the hoempage </a></button>
                </div>
            </div>

			
        </div>
    </form>
</div>
</body>
</html>
