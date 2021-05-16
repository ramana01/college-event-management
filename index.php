<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GecFest2k21</title>
        <?php require 'utils/styles.php';?>
      
        
    
            </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12" ><!--body content title holder with 12 grid columns-->
                    <h1 style="color:skybue ; font-size:42px ; font-style:bold ;margin:20px;"><strong>  Register your Favourite events:</strong></h1><!--body content title-->

            </div>
            
            
            <div class="container">
            <div class="col-md-12">
            
            </div>
            </div>
            
            <div class="row"><!--technical content-->
                <section>
                    <div class="container" style="border:thick solid #00BFFF; border-radius:10px;margin-bottom:10px;padding:0px;background-color: #00BFFF;">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/technical.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6" style="align-center;top:80px;"><!--Text holder with 6 column grid-->
                        
                            <h1 style="font-size:38px ;" ><strong>Technical Events</strong></h1><!--title-->
                            <p style="color:black ;"><!--content-->
                                EMBRACE YOUR TECHNICAL SKILLS BY PARTICIPATING IN OUR DIFFERENT TECHNICAL EVENTS!
                            </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container" style="border:thick solid #00BFFF; border-radius:10px;margin-bottom:10px;padding:0px;background-color: #00BFFF;">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/gaming.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6" style="align-center;top:80px;"><!--Text holder with 6 column grid-->
                            <h1 style=" font-size:38px ;"><strong>Gaming Events</strong></h1><!--title-->
                            <p style="color:black ;"><!--content-->
                                EMBRACE YOUR GAMING SKILLS BY PARTICIPATING IN OUR DIFFERENT GAMING EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Gaming Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container" style="border:thick solid #00BFFF; border-radius:10px;margin-bottom:10px;padding:0px;background-color: #00BFFF;">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/onstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6" style="align-center;top:80px;"><!--Text holder with 6 column grid-->
                            <h1 style=" font-size:38px ;"><strong>On-Stage Events</strong></h1><!--title-->
                            <p style="color:black ;"><!--content-->
                                EMBRACE YOUR CONFIDENCE BY PARTICIPATING IN OUR DIFFERENT ON-STAGE EVENTS!
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=3;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View On-Stage Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
                </div>
            </div>

            <div class="row">
                <section>
                    <div class="container" style="border:thick solid #00BFFF; border-radius:10px;margin-bottom:10px;padding:0px;background-color: #00BFFF;">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <img src="images/offstage.jpg" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6"style="align-center;top:80px;"><!--Text holder with 6 column grid-->
                            <h1 style="font-size:38px ;"><strong>Off-Stage Events</strong></h1><!--title-->
                            <p style="color:black;"><!--content-->
                                 EMBRACE YOUR TALENT BY PARTICIPATING IN OUR DIFFERENT OFF-STAGE EVENTS!
                            </p>
                            
                            
                            <br><br><br>
                            <?php 
                            $id=4;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Off-Stage Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
  
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>