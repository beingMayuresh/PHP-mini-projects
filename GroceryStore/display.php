<!doctype html>
<html>
<head>
<title>Grocery Cart</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" type="text/css">\
    <link href="https://fonts.googleapis.com/css?family=Gravitas One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="stylesheet/jquery.fancybox.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheet/jquery.fancybox-buttons.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheet/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
</head>
<body>

<div class="container-fluid">
      <div class="row">
        <div class="col-md-12" style="height: 600px; background-color: #AD7F75;">

                    <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>

                    <input type="button" class="btn btn-warning" name="getrecords" id="getrecords" value="Get Records" />
                    <span id="loading" style="display: none">please wait.....</span>
                    <div id="response"></div>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#getrecords").click(function () {
                                $("#loading").show();
                                $.ajax({
                                    url: "getemployee.php",
                                    type: 'POST',
                                    data: {'action':'submit'},
                                    dataType: 'json',
                                    success: function (data) {
                                        $("#loading").hide();
                                        if(data.status=="true"){
                                            $("#response").html(data.employee);
                                        }else{
                                            $("#response").html("Error in db query");
                                        } 
                                    }
                                });

                            });
                        });
                    </script>



                        <input type="text" name="name" id="name" placeholder="name"> <br><br>

                        <input type="text" name="email" id="email" placeholder="email"> <br><br>

                        <input type="text" name="salary" id="salary" placeholder="salary"> <br><br>

                        <input type="button" class="btn btn-warning" name="submit" value="submit" id="insert">


                    <div class="responseinsert"></div>
                    <script>
                        $(document).ready(function(){
                           $("#insert").click(function(){
                              var name = $("#name").val(); 
                              var email = $("#email").val(); 
                              var salary = $("#salary").val();

                                $.ajax({
                                   url: "insertEmployee.php",
                                   type: 'POST',
                                   data: {'action':'insert','empname':name,'empemail':email,'empsalary':salary},
                                   dataType: 'json',
                                   success: function (data) {
                                            if(data.status=='true'){
                                                $(".responseinsert").html("Employee inserted successfully!");
                                            }else{
                                                $(".responseinsert").html("Error in insert");
                                            }
                                        }
                                });
                              
                           });
                        });
                    </script>


  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
    <script src="js/script.js"></script>


    </div>
    </div>
    </div>


</body>
</html>









