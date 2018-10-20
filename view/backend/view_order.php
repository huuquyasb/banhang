<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->
		<div style="margin:15px 0px">
			<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add</a>
		</div>
		<div class="card border-primary">
			<div class="card card-header bg-primary text-white" style="padding:7px !important;">Login</div>
				<div class="card-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ nhận hàng</th>
                        <th>Sản phẩm đặt</th>
                        <th>Ngày đặt hàng</th>
					</tr>
				<?php 
					foreach($arr as $rows)
					{
				 ?>
					<tr>
						<td><?php echo $rows->name; ?></td>
						<td><?php echo $rows->email; ?></td>
						<td><?php echo $rows->phone; ?></td>
                        <td><?php echo $rows->address; ?></td>
                        <td><?php echo $rows->product_id; ?></td>
                        <td><?php echo $rows->created_at; ?></td>
					</tr>
				<?php } ?>
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php 
						for($i = 1; $i <= $num_page; $i++)
						{
					 ?>	
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>