 <div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				<?php
				$getLastestbedroom = $product->getLastestbedroom();
				if($getLastestbedroom){
					while($resultdell = $getLastestbedroom->fetch_assoc()){
				 ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $resultdell['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Phòng ngủ mới</h2>
						<p><?php echo $fm->textShorten($resultdell['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $resultdell['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>

			    <?php
				$getLastestbedroom = $product->getLastestbedroom();
				if($getLastestbedroom){
					while($resultss = $getLastestbedroom->fetch_assoc()){
				 ?>			
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						  <a href="details.php"><img src="admin/uploads/<?php echo $resultss['image'] ?>" alt="" /></a>
					</div>
					<div class="text list_2_of_1">
						  <h2>Phòng ngủ mới</h2>
						  <p><?php echo $fm->textShorten($resultss['productName'],35) ?></p>
						  <div class="button"><span><a href="details.php?proid=<?php echo $resultss['productId'] ?>">Thêm vào giỏ</a></span></div>
					</div>
				</div>
				<?php
				}}
			    ?>
			</div>
			<div class="section group">
				<?php
				$getLastestkitchen = $product->getLastestkitchen();
				if($getLastestkitchen){
					while($result_ap = $getLastestkitchen->fetch_assoc()){
				 ?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $result_ap['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Phòng bếp mới</h2>
						<p><?php echo $fm->textShorten($result_ap['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result_ap['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>

				<?php
				$getLastestlivingroom = $product->getLastestlivingroom();
				if($getLastestlivingroom){
					while($result_hw = $getLastestlivingroom->fetch_assoc()){
				 ?>		
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php"> <img src="admin/uploads/<?php echo $result_hw['image'] ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Phòng khách mới</h2>
						<p><?php echo $fm->textShorten($result_hw['productName'],35) ?></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result_hw['productId'] ?>">Thêm vào giỏ</a></span></div>
				   </div>
			   </div>
			   <?php
				}}
			    ?>			
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<?php 
						$get_slider = $product->show_slider();
						if ($get_slider) {
							while ($result_slider = $get_slider->fetch_assoc()) {
								# code...
							
						 ?>
						<li><img src="admin/uploads/<?php echo $result_slider['slider_image'] ?>" alt=""/></li>
						<?php 
						}
						}
						 ?>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>