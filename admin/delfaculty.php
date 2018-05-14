<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
  <script type="text/javascript">
                  
                  function editfaculty(){
                    document.getElementById("modalfac").style.display = "block";
                  }

                  
                </script>
   
	<style type="text/css">
		

.modal-dialog {
 
          width: 320px;
 
        }
.divider {
  height: 20px;
  display: block;
}

/* ========================================================================
 * FORM MISC
 * ======================================================================== */
.input-group-addon {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  min-width: 39px;
}
.input-group-addon .ckbox, .input-group-addon .rdio {
  position: absolute;
  top: 4px;
  left: 10px;
}

.input-group-lg > .form-control, .input-group-lg > .input-group-addon, .input-group-lg > .input-group-btn > .btn, .input-group-sm > .form-control, .input-group-sm > .input-group-addon, .input-group-sm > .input-group-btn > .btn, .input-group-xs > .form-control, .input-group-xs > .input-group-addon, .input-group-xs > .input-group-btn > .btn {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.input-sm, .form-group-sm .form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
}

.form-control {
  -moz-border-radius: 0px;
  -webkit-border-radius: 0px;
  border-radius: 0px;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}

@media (max-width: 640px) {
  .form-inner-all [class*="col-"]:last-child .form-control {
    margin-top: 15px;
  }
}


/* ========================================================================
 * PROFILE
 * ======================================================================== */
.profile-cover {
  width: 100%;
}
.profile-cover .cover {
  position: relative;
  border: 10px solid #FFF;
}
.profile-cover .cover .inner-cover {
  overflow: hidden;
  height: auto;
}
.profile-cover .cover .inner-cover img {
  border: 1px solid transparent;
  text-align: center;
  width: 100%;
}
.profile-cover .cover .inner-cover .cover-menu-mobile {
  position: absolute;
  top: 10px;
  right: 10px;
}
.profile-cover .cover .inner-cover .cover-menu-mobile button i {
  font-size: 17px;
}
.profile-cover .cover ul.cover-menu {
  padding-left: 150px;
  position: absolute;
  overflow: hidden;
  left: 1px;
  float: left;
  bottom: 0px;
  width: 100%;
  margin: 0px;
  background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.24);
}
.profile-cover .cover ul.cover-menu li {
  display: block;
  float: left;
  margin-right: 0px;
  padding: 0px 10px;
  line-height: 40px;
  height: 40px;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.profile-cover .cover ul.cover-menu li:hover {
  background-color: rgba(0, 0, 0, 0.44);
}
.profile-cover .cover ul.cover-menu li.active {
  background-color: rgba(0, 0, 0, 0.64);
}
.profile-cover .cover ul.cover-menu li a {
  color: #FFF;
  font-weight: bold;
  display: block;
  height: 40px;
  line-height: 40px;
  text-decoration: none;
}
.profile-cover .cover ul.cover-menu li a i {
  font-size: 18px;
}
.profile-cover .profile-body {
  margin: 0px auto 10px;
  position: relative;
}
.profile-cover .profile-timeline {
  padding: 15px;
}
.img-post{
    width:30px;
    height:30px;
}
.img-post2{
    width:50px;
    height:50px;
}
	</style>
	
</head>
<body style="background-color: #f5f5f5;" onload="modalnone()">
	<!--Top Bar -->
<?php include('topbar.php');?>
	<!--/Top Bar-->
	<!--banner-->
<?php include('banner.php');?>
	<!--/banner-->
	<!--navbar-->
<?php include('navbar.php');?>
	<!--/navbar-->


<div class="container-fluid">
 
  <br>
  <br>
  <form ></form> 
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
   <div class="row" style="margin-top: 20px;">
  	
		    <div class="col-lg-8" >
  				<ul class="list-group col-md-12" id="myList" >
					<?php 
					 $query1 = "SELECT iname,iid FROM faculty ORDER BY iid";
						if ($result1=mysqli_query($db,$query1))
						{
										  // Fetch one and one row
						 while ($row=mysqli_fetch_row($result1))
							    {echo "<a href=#><li class=list-group-item id=";echo $row[0]; echo ">";
						echo $row[1];echo "-";;echo $row[0];echo "</li></a>";
						
							    }
							  // Free result set
							  mysqli_free_result($result1);
						}

					?>
				</ul>
			</div>

			<div class="col-lg-4" style="border-left: 1px solid black;" >

				<div class="container bootstrap snippets">
				<div class="row">
				    <div class="col-lg-4 col-md-3 col-sm-4">
				        <div class="panel rounded shadow">
				            <div class="panel-body">
				                <div class="inner-all">
                          <div class="modal-dialog " class="col-lg-4 col-md-3 col-sm-4" id="modalfac" style="display:none;">
    <div class="modal-content" >
      <div class="modal-heading">
        <h2 class="text-center">Update Faculty</h2>
      </div>
      <hr />
      <div class="modal-body">
        
        <form role="form" name="delf" id="delf" method="POST">
                    <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" disabled name="fid" id="fid"  class="form-control" placeholder="Employee ID" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT iid FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?>
                       />
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Full Name" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT iname FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?>
               />
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-envelope"></span>
              </span>
              <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT email FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?> />
            </div>
          </div>  
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-phone"></span>
              </span>
              <input type="text" class="form-control" id="number" name="number" placeholder="Phone number" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT phno FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?> />
            </div>
          </div>  
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" />

            </div>

          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-lock"></span>
              </span>
              <input type="password" class="form-control" id="password1" name="password1" placeholder="Re-enter Password" />

            </div>

          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-comment"></span>
              </span>
              <input type="textarea" class="form-control" id="description" name="description" placeholder="Description" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT description FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?> />

            </div>

          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-user"></span>
              </span>
              <input type="text" name="status" id="status"  class="form-control" placeholder="status" value=<?php 
                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT status FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 


               ?>
                       />
            </div>
          </div>
          <div class="form-group">
              <select class="form-control" id="sel2" name="sel2">
                <option name="cse"  value="cse">C.S.E</option>
                <option name="ece"  value="ece">E.C.E</option>
                <option name="eee"  value="eee">E.E.E</option>
                <option name="civil" value="civil">Civil</option>
                <option name="mech" value="mech">MECH</option>
              </select>

          </div>


          <div class="form-group text-center">
            <button type="submit" class="btn " id="updatefac" name="updatefac" style="background-color: #fb641b;">update faculty</button>
            <button type="submit" class="btn " name="" style="background-color: white;" onclick="faccancel()">cancel</button>
                    
          </div>

        </form>
      </div>
    </div>
  </div>
  
<div id="ulfac" style="display: none;">
				                    <ul class="list-unstyled">
				                        <li class="text-center">
				                           
				                        </li>
                                <div id="editfac">
				                        <li class="text-center">
				                            <h4 class="text-capitalize">
                                      <?php
                                      $facuname="";
                                    

                                      if (isset($_GET['name'])) {
                                      
                                      echo "<script>";
                                      echo "document.getElementById('ulfac').style.display = 'block';";
                                      echo "</script>";

                                      $facuname =$_GET['name'];
                                      
                                      $query1 = "SELECT iname FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {
                                        echo $row[0];
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }

                                    } 
                                      ?>
                                        
                                    </h4>
				                            <p class="text-muted text-capitalize">
                                    <?php   if (isset($_GET['name'])) {
                                       $facuname =$_GET['name'];
                                       $facdetails="";
                                        $query1 = "SELECT iid,email,phno,department FROM faculty where iid='$facuname'";
                                        if ($result1=mysqli_query($db,$query1))
                                        {
                                                  // Fetch one and one row
                                         while ($row=mysqli_fetch_row($result1))
                                              {$facdname = $row[0];
                                               $facdid = $row[1]; 
                                                echo "id : ";
                                        echo $row[0];echo "<br>";echo $row[1];echo "<br>";
                                        echo $row[2];echo "<br>";echo $row[3];echo "<br>";
                                        
                                              }
                                            // Free result set
                                            mysqli_free_result($result1);
                                        }                                        
                                                               
                                      
                                    }  ?>
                                    </p>
				                        </li>
				                       
				                        <li><br></li>
				                        <li>
				                            <div class="btn-group-vertical btn-block">
                                           
                                    <form method="post">
                                        <input type="submit" class="btn btn-danger text-center btn-block" name="delfac" id="delfac" value="delete" /><br/>
                                    </form>

                                    <?php

                                    function testfun()
                                    {
                                        if (isset($_GET['name'])) {
                                        $facuname =$_GET['name'];
                                  
                                        echo $facuname;
                                        $db = mysqli_connect('localhost', 'root', '', 'online');
                                        $query = "DELETE FROM faculty WHERE iid='$facuname'";
                                        mysqli_query($db, $query);
                                        echo '<script language="javascript">';
                                        echo 'alert("delete faculty successful!")';
                                        echo '</script>';
                                           echo "<script type='text/javascript'>window.location.href='delfaculty.php'</script>";

                                      }


                                    }

                                    if(array_key_exists('delfac',$_POST)){
                                       testfun();
                                    }

                                    ?>
				                             
                                    </div>
				                        </li>
                              </div>
                                 <li>
                                    <button class="btn btn-success text-center btn-block"  id="editfacbtn" onclick="editfaculty()">Edit details</button>
                                </li>
				                    </ul></div>
				                </div>
				            </div>
				        </div><!-- /.panel -->
                <script type="text/javascript">
                  
                  function editfaculty(){
                    document.getElementById("modalfac").style.display = "block";
                    document.getElementById("ulfac").style.display = "none";
                     
                  }
                  function faccancel(){
                    document.getElementById("modalfac").style.display = "none";
                    document.getElementById("ulfac").style.display = "block";
                     
                  }


                  
                </script>
               
                				       

				    </div>
				   
				    </div>
				</div>


			</div>
				
	</div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</body>
</html>


<script type="text/javascript">
	var facname;


	$(function(){
 
    // onclick event
    $('#myList li').click(function() {
        //alert($(this).text());
//        alert($(this).text());
        facname = $(this).text();
        //window.alert(facname);  
       var arr = facname.split('-');
        facid = arr[0];    
       //window.alert(arr[0]);
        window.location.href = "delfaculty.php?name="+facid; 
    });
 
});</script>
