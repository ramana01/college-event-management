<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GecFest 2k21</title>
    <style>
.bgImage 
{
    background-image: url(images/bg5.jpg);
    background-size: cover;
    background-position: center center;
    height: 600px;
    margin-bottom: 29px;
}
</style>
</head>

        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->


<header class="bgImage" > 
    <nav class="navbar" >
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
             
                <a class = "navbar-brand">
                    <h2>GecFest 2k21</h2>
                </a> 
            </div>
            <ul class="nav navbar-nav navbar-right" style="font-size:25px;"><!--navigation-->
            <li><a href = "adminPage.php"><strong>events Details</strong></a></li>
            <li><a href = "Participants_details.php"><strong>participants Details</strong></a></li>
                    
                    <li class="btnlogout"><a class = "btn btn-default navbar-btn" href = "index.php">Logout <span class = "glyphicon glyphicon-log-out"></span></a></li>            
        
            </ul>
        </div><!--container div-->
    </nav>
    <div class = "col-md-12" style="left:0px;">
        <div class = "container">
            <div class = "jumbotron"><!--jumbotron-->
                <h1><strong>GecFest2k21<br></strong>Welcome Admin!</h1><!--jumbotron heading-->
                <h2 style="font-style: bold">Explore Event & Participants Details</h2>
                <br>
                <br>
                </div>
                <div class="browse d-md-flex col-md-14 "  >
                
                <img style="position: absolute; top:0px;right: 80px;height:500px;" src="images\founderbgremove.png"/>
                </div>
                  
                  
         
        </div>
        <!-- <div class="founder">
        <img src="images\founderbgremove.png"/>
        </div> -->
    </div>
</header>