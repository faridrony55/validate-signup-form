<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" >
        
        <title>Contact with Validation</title> 
        <style type="text/css">

		  .row{
            min-height: 100vh;
          }
         body{background: #dedede;}
         .contact-form{
                background: #fff;
                padding: 35px 25px 20px;
                box-shadow: 0px 0 25px #afafaf;
         }
         #formbox span{
                color: #5555ff;
    font-size: 10px;display: block;
         }
         .btn-custom{
            background: #5555ff;
    color: #fff;
    text-transform: uppercase;
    border-radius: 0;
    padding: 8px 20px;
         }
         .form-control:focus {
    color: #495057;
    border-color: #5555ff;
    outline: 0;
    box-shadow: 0 0 0 0rem rgba(0,123,255,.25);
}
 
.form-control {
    border-radius: 0;
}
		 </style> 
    </head> 
    <body> 

        <section class="contact-section">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-sm-6 contact-form">
                            <div id="preview"></div>

                        <div class="" id="formbox">
                            <form name="form" id="form" action="submit.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="name"maxlength="40" placeholder="Enter full name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="phone"maxlength="11" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"  name="email"maxlength="100" placeholder="Enter name">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  name="password" id="password" maxlength="40" placeholder="Enter a password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  name="repassword" maxlength="40" placeholder="re type password">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control"  name="message" rows="5"></textarea>
                                </div>
                                <div class="form-group"> 
                                    <input type="submit" name="" class="btn btn-custom">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    


        <script type="text/javascript" src="js/jquery.js"></script> 
        <script type="text/javascript" src="js/jquery.validate.js"></script> 
        <script type="text/javascript" src="js/jquery.form.js"></script> 
        <script type="text/javascript" src="js/custom.js"></script> 
        
    </body> 
</html> 