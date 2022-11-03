
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<div >
							
						</div>
					</div>
				</div>
			</div>
		
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!-- about -->
	<div class="banner-bottom-w3l" id="about" style="background-color:#ddd">
		<div class="container">
			<div class="title-div">
			<h3 class="tittle">
					<span><li class="fa fa-bullhorm" style="color:black">Manado International School</li></span>
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-6 banner_bottom_left">
					<h4 style="font-family: Times New Roman">Manado International School</h4>
					<p align="justify" style="font-family: Times New Roman; color:black">Manado Internatioanl School merupakan salah satu sekolah kepercayaan di Kota Manado, Sulawesi Utara dan Nasional dengan dijadikannya sebagai Rintisan Sekolah Bertaraf Internasional (RSBI) di Sulawesi Utara dari 100 sekolah RSBI Angkatan I di seluruh Indonesia pada tahun 2010.
							Manado Internatioanl School terletak tidak jauh dari pusat kota manado yang merupakan pusat pemerintahan, pusat pertumbuhan ekonomi, pusat pendidikan dan pusat tujuan wisata di Sulawesi Utara. Sekolah ini berlokasi di Jl. Martadinata 3 no. 20, berjarak sekitar 1 km dari pusat pemerintahan kota Manado.
							<br>Kepala Sekolah <br>
							Drs. Vanex Lumentah</p>
				</div>
			</div>


			<!--Visi Misi-->
			<br>
			<div align="center"  class="col-md-6" id="visi" >
				<h4 style="font-family: Times New Roman">Visi</h4>
				<h4 >"Terwujudnya Insan Cerdas yang Berilmu, Cinta Lingkungan serta Mampu Bersaing di Era Globalisasi"</h4>
			</div>
			<div class="container">
				<div class="row">
					<h2 style="font-size: 30px; font-family: Times New Roman" align="center" > Misi</h2>
					<div style="font-size: 20px; align=justity">
					  <th>1.Menciptakan proses pembelajaran yang efektif, kreatif,&amp;inovatif </th><br>
					  <th>2.Mewujudkan sekolah sehat yang bernuansa lingkungan &amp; Fisika</th><br>
					  <th>3.Meningkatkan kompetensi tenaga pendidik</th><br>
					  <th>4.Menumbuh kembangkan pengamalan nilai-nilai religius </th><br>
					  <th>5.Mewujudkan sistem pengelolaan manajemen yang bermutu</th><br>
					  <th>6.Meningkatan keterampilan Teknologi Infomasi dan Komunikasi</th>
					</div>
				  </div>
				</div>
				<hr>
			  </div>
			</div>
			<!--//Visi Misi-->
				<!-- Stats-->

				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
	<!-- //about -->
	<!-- services -->
    
    <?php include "best_study.php"; ?>

	<!-- //services -->
	<!-- news -->

	<div class="news " style="background-color:#ddd"  id="news">
		<div class="container">
			<div class="title-div">
			<div class="about-sub">
				<div class="col-md-12 about_bottom_left" align="center">
					<h4 style="Font-Family:Times New Roman">Welcome to
						<span style="Font-Family:Times New Roman">Information</span>
					</h4>
				<div class="tittle-style">
				</div>
			</div>
			 <div class="about">
		<div class="container" id="informasi">
			<div class="about-grids" align="center">
         <?php 
            	include "koneksi.php";
				$berita=mysqli_query($koneksi,"SELECT * FROM `tbl_pengumuman` WHERE 1 ORDER BY id_pengumuman DESC LIMIT 6");
				while ($sql=mysqli_fetch_array($berita)){
				$isi=substr($sql['isi_pengumuman'],0,100);	
				?>
				<div class="col-md-6 wthree-about-left" style="Font-Family:Times;font-size: 30;" >
					<div class="wthree-about-left-info">
						<a href="?page=detail_pengumuman&id=<?php echo $sql ['id_pengumuman']; ?>"  data-toggle="modal"><img width="400" height="300" src="admin/user/images/<?php echo $sql['foto_pengumuman']; ?>" alt="" /></a>
						<p>
						<a href="?page=detail_pengumuman&id=<?php echo $sql ['id_pengumuman']; ?>"  data-toggle="modal"><?php echo $sql ['judul_pengumuman']; ?>.....</a href="#">Selengkapnya..</a>
						</p>
					
					</div>
				</div>
				<div class="agileits-about-left">	
                </div>
             <?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
	<!-- modal -->

	<!-- //modal -->

	<!-- //news -->

	<!-- middle section -->


	<!-- //middle section -->

	<!-- testimonials -->
	
						<div class="clearfix"> </div>
					</div>
				</li>

			</ul>
		</div>
	</div>