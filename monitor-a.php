<?php include "views/header.php";?>
<?php include "controller/anak-session.php"; ?>
<?php include "controller/kandungan-session.php"; ?>
<body bgcolor="#248ea9" style="margin:0;" onload="waktu()">
	<div id="page-wrapper-datetime">
		<div class="row">
			<div class="col-lg-6">
	  			<h2 class="whitetext">
	  				<?php //include "views/hariini.php";?>
	  			</h2>
			</div>
		    <div align="right" class="col-lg-6">
		       	<h2 class="whitetext"><?php include "views/digital-timer.php";?></h2>
		    </div>
	    </div>
	</div>
    	<marquee direction="left" bgcolor="#ff971d" width="auto"><font class="marquee1">Selamat Datang di RSKIA Rachmi Yogyakarta</font></marquee>
       	<marquee direction="right" bgcolor="#005082" width="auto"><font class="marquee2">Melayani Dengan Kasih dan Sayang</font></marquee>
		<?php include "views/header.php"; ?>
	  	<div id="page-wrapper">
	  	<div class="row">
	    <div class="col-lg-12">
	    	<div class="col-lg-6">
				<div align="center" class="panel-queue panel-primary-queue">
				    <div class="panel-heading">
				    	<h1>Poli Anak</h1>
				    </div><br>
				    <div class="bs-example">
				        <?php include "anak-antrian.php";?><br><br>
				    </div>
				</div>
	        </div>
	        <div class="col-lg-6">
				<div align="center" class="panel-queue panel-primary-queue">
				    <div class="panel-heading">
				    	<h1>Poli Kandungan</h1>
				    </div><br>
				    <div class="bs-example">
				        <?php include "kandungan-antrian.php";?><br><br>
				    </div>
				</div>
	        </div>
	</div>
	</div><!-- /.row -->
	<br>
		<div class="whitetext" align="center"><font size="5">Developed by Ardi Tri Heru<br>
			Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script><a expr:href='data:blog.homepageUrl'><data:blog.title/>.</a>All rights reserved.<br>Version 3.6.0</font>
		</div>
    </div><!-- /.wrapper -->
</body>
<?php include "views/footer.php";?>
