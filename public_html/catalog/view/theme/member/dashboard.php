<div class="container mt-4">
	<div class="row">
	    <div class="col-md-12">
			<h2 class="text-center">สมาชิก</small></h2>
			<hr class="colorgraph">
		</div>
	</div>
	<div class="row mt-4">
		<div class="col-md-2">
			ผู้ใช้งาน : <span>xx</span><br>
			<span class="text-success">0.00</span> บาท
		</div>
		<div class="col-md-10">
			<nav class="nav nav-pills nav-justified">
					<a href="<?php echo $link_deposit; ?>" class="nav-item nav-link text-success">ฝากเงิน</a>
					<a href="<?php echo $link_widthdraw; ?>" class="nav-item nav-link text-danger">ถอนเงิน</a>
					<a href="<?php echo $link_reward; ?>" class="nav-item nav-link ">ผลรางวัล</a>
					<a href="<?php echo $link_ticket; ?>" class="nav-item nav-link ">โพยหวย</a>
					<a href="<?php echo $link_finance; ?>" class="nav-item nav-link ">การเงิน</a>
			</nav>
		</div>
	</div>
	
	<div class="row mt-4">
		<?php foreach($category as $val){ ?>
		<div class="col-4 mb-2">
			<div class="card">
				<div class="card-body text-center bg-info ">
					<a href="<?php echo $link_lottery;?>" class="text-light"><?php echo $val['name']; ?></a>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>