<html>
    <head>
        <title>Simple Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">

        
        <script>
          // function validateForm() {
          
          //   var fname = document.forms["myForm"]["fname"].value;
          //   var lname = document.forms["myForm"]["lname"].value;
          //   var email = document.forms["myForm"]["email"].value;
          //   var num = document.forms["myForm"]["phone"].value;
          //   var date = document.forms["myForm"]["date"].value;
          //   var gender = document.forms["myForm"]["gender"].value;
          //   var address = document.forms["myForm"]["address"].value;
          //   var hobby = document.forms["myForm"]["hobby[]"];
          //  console.log(hobby);
          //  for(i=0;i<hobby.length;i++){
          //    if(hobby[i].checked==true){
          //      alert("success");
          //      break;
          //    }else{
          //      count=1;
          //    }
          //  }
          //  if(count==1){
          //    alert ("unsuccess");
          //  }
            

            // if (fname == "" && lname=="" && email=="" && num==""&& date=="" && gender=="" && address=="" && hobby=="" ) {
            //   alert("All fields must be filled out");
            //   return false;
            // }

            // if (fname == "") {
            //   alert("Firstname must be filled out");
            //   return false;
            // }
            // if (lname == "") {
            //   alert("Lastname must be filled out");
            //   return false;
            // }
            // if (email == "") {
            //   alert("Email must be filled out");
            //   return false;
            // }
            // if (num == "") {
            //   alert("Phone number must be filled out");
            //   return false;
            // }
            // if (date == "") {
            //   alert("Date must be selected");
            //   return false;
            // }
            
            // if (gender == "") {
            //   alert("Gender must be selected");
            //   return false;
            // }
            // if (address == "") {
            //   alert("Address must be filled out");
            //   return false;
            // }

            // if (hobby="") {
            //   alert("At least one hobby must be selected");
            //   return false;
            // }

          //}
          </script>
          <script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  var y = document.forms["myForm"]["lname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
}
</script>
    
</head>
 

    <body class="container">
    <video autoplay muted loop src="4k background footage (ideal for Blockchain Website).mp4" style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;"></video>  
    <div class="container">
    <a href="biodata.php"><button type="button" class="btn btn-primary btn-lg col-sm-2" >View Data</button></a>
    </div>
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
        
      
        <form name="myForm" onsubmit="return validateForm()" action="./entryBiodata.Controller.php" method="POST" style="background-color:rgb(190, 215, 229); ">
          <div class="col-sm-12"> 
          <h1 class="border-bottom center pb-3 mb-4" style="text-align: center;">Student Details</h1>
        </div> 

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3" for="firstName">First Name:</label>
                    <div class="col-sm-7">
                        <input type="text" name="fname" class="form-control" id="firstName" placeholder="First Name" required >
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="lastName">Last Name:</label>
                    <div class="col-sm-7">
                        <input type="text" name="lname" class="form-control" id="lastName" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="inputEmail">Email Address:</label>
                    <div class="col-sm-7">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 " for="RollNumber">Roll Number:</label>
                    <div class="col-sm-7">
                        <input type="number" name="phone" class="form-control" id="phoneNumber" placeholder="Roll Number" required>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3">Date of Birth:</label>
                    <div class="col-sm-3">
                      <input type="date"  name="date" required>
                      </div>
                        
                </div>
               
               
                <div class="form-group row">
                  <div class="col-sm-1"></div>
                    <label class="col-sm-3 ">Gender:</label>
                    <div class="col-sm-7 ">
                        <label class="mb-0 mr-3">
                            <input type="radio" class="mr-1" name="gender" value="male"> Male
                        </label>
                        <label class="mb-0 mr-3">
                            <input type="radio" class="mr-1" name="gender" value="female"> Female
                        </label>
                        <label class="mb-0 mr-3">
                            <input type="radio" class="mr-1" name="gender" value="other"> other
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " for="address">Address:</label>
                  <div class="col-sm-7">
                      <input type="text" name="address" class="form-control" id="address" placeholder="Your Address" required>
                  </div>
              </div>

                <div class="form-group row col">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " >Subject 1</label>
                  <div class="col-sm-7"> 
                  <div class="custom-control custom-checkbox custom-control-inline">
                  <select name="skillevel" id="html" class="custom-control">
                        <option value="">Subjects</option>
                        <option value="beginner">Eng</option>
                        <option value="intermediate">Maths</option>
                        <option value="Expert">Science</option>
                        <option value="Expert">SSt</option>
                        <option value="Expert">IT</option>
                        <option value="Expert">Arts</option>
                    </select>
                  </div>
                    <input class="col-sm-4" type="text" placeholder="Marks">
                  </div>
                  
              </div>

              <div class="form-group row col">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " >Subject 2</label>
                  <div class="col-sm-7"> 
                  <div class="custom-control custom-checkbox custom-control-inline">
                  <select name="skillevel" id="html" class="custom-control">
                        <option value="">Subjects</option>
                        <option value="beginner">Eng</option>
                        <option value="intermediate">Maths</option>
                        <option value="Expert">Science</option>
                        <option value="Expert">SSt</option>
                        <option value="Expert">IT</option>
                        <option value="Expert">Arts</option>
                    </select>
                  </div>
                  <input class="col-sm-4" type="text" placeholder="Marks">
                  </div>
                  
              </div>

              <div class="form-group row col">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " >Subject 3</label>
                  <div class="col-sm-7"> 
                  <div class="custom-control custom-checkbox custom-control-inline">
                  <select name="skillevel" id="html" class="custom-control">
                        <option value="">Subjects</option>
                        <option value="beginner">Eng</option>
                        <option value="intermediate">Maths</option>
                        <option value="Expert">Science</option>
                        <option value="Expert">SSt</option>
                        <option value="Expert">IT</option>
                        <option value="Expert">Arts</option>
                    </select>
                  </div>
                  <input class="col-sm-4" type="text" placeholder="Marks">
                  </div>
                  
              </div>

              <div class="form-group row col">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " >Subject 4</label>
                  <div class="col-sm-7"> 
                  <div class="custom-control custom-checkbox custom-control-inline">
                  <select name="skillevel" id="html" class="custom-control">
                        <option value="">Subjects</option>
                        <option value="beginner">Eng</option>
                        <option value="intermediate">Maths</option>
                        <option value="Expert">Science</option>
                        <option value="Expert">SSt</option>
                        <option value="Expert">IT</option>
                        <option value="Expert">Arts</option>
                    </select>
                  </div>
                  <input class="col-sm-4" type="text" placeholder="Marks">
                  </div>
                  
              </div>

              <div class="form-group row col">
                  <div class="col-sm-1"></div>
                  <label class="col-sm-3 " >Subject 5</label>
                  <div class="col-sm-7"> 
                  <div class="custom-control custom-checkbox custom-control-inline">
                  <select name="skillevel" id="html" class="custom-control">
                        <option value="">Subjects</option>
                        <option value="beginner">Eng</option>
                        <option value="intermediate">Maths</option>
                        <option value="Expert">Science</option>
                        <option value="Expert">SSt</option>
                        <option value="Expert">IT</option>
                        <option value="Expert">Arts</option>
                    </select>
                  </div>
                    <input class="col-sm-4" type="text" placeholder="Marks">
                  </div>
                  
              </div>
                
                <div class="form-group row">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-7 ">
                        <input type="submit" class="btn btn-dark" value="Submit">
                      </div>
                      <div class="col-sm-1">
                        <input type="reset" class="btn btn-dark" value="Reset">
                    </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-9 offset-sm-3">
                     
                  </div>
              </div>
    
          </form>
        
          </div>
          </div>
    </body>

</html>

