<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">

		<ul class="nav navbar-nav">
							 <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
				while($row=mysqli_fetch_array($sql))
				{
				    ?>

			 <li class="nav-item dropdown">
                          <a href="category.php?cid=<?php echo $row['id'];?>" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $row['categoryName'];?> <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                           <?php $sql=mysqli_query($con,"select id,subcategory  from subcategory where categoryid='$cid'");

								while($rowss=mysqli_fetch_array($sql))
								{
								    ?>

                            <li><a href="sub-category.php?scid=<?php echo $rowss['id'];?>"><?php echo $rowss['subcategory'];?></a>
                             <?php } ?></li>



                            <li><a href="team.html">Our People</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                          </ul>
                      </li>

	               <?php } ?>

              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

                      <li class="nav-item dropdown">
                          <a href="category.php?cid=<?php echo $row['id'];?>" class="nav-link dropdown-toggle" data-toggle="dropdown"> <?php echo $row['categoryName'];?> <i class="fa fa-angle-down"></i></a>


                          <ul class="dropdown-menu" role="menu">

                            <li class="dropdown menu-item">
								              <?php $sql=mysqli_query($con,"select id,subcategory  from subcategory where categoryid='$cid'");

								while($row=mysqli_fetch_array($sql))
								{
								    ?>
								                <a href="sub-category.php?scid=<?php echo $row['id'];?>" class="dropdown-toggle"><i class="icon fa fa-desktop fa-fw"></i>
								                <?php echo $row['subcategory'];?></a>
								                <?php }?>
								                        
								</li>
                            
                          </ul>
                      </li>
                      <?php } ?>






          

			
		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>				
	</div>
</div>


            </div>
        </div>
    </div>
</div>