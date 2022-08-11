<?php include ('librarianheader.php'); ?>

        <div class="page-title">
            <div class="title_left">
                <h3>
					<small>Home /</small> Requested Books
                </h3>
            </div>
        </div>
        <div class="clearfix"></div>
 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
					<h2><i class="fa fa-book"></i> Requested Books Monitoring</h2>
					<ul class="nav navbar-right panel_toolbox">					
						
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <!-- If needed 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
						-->
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
						<span style="float:left; margin-left:358px;">
						<!---	<a href="borrowed_book.php"><button class="btn btn-primary"><i class="fa fa-info"></i> All Records (<?php /// echo $count['total']; ?>)</button></a> -->
					<!---		<a href="borrow_book.php"><button class="btn btn-success btn-outline"><i class="fa fa-info"></i> Borrowed Books (<?php //echo $count1['total']; ?>)</button></a>  -->
					<!---		<a href="returned_book.php"><button class="btn btn-danger btn-outline"><i class="fa fa-info"></i> Returned Books (<?php // echo $count2['total']; ?>)</button></a>     -->
						</span>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <!-- content starts here -->

						<div class="table-responsive">
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								
							<thead>
								<tr>
									<th>Barcode</th>
									<th>User Id</th>
									<th>User Name</th>
									<th>Title</th>
									<th>Request Date</th>			
									<th>Request Description</th>	
                                    <th>Action</th>									
								</tr>
							</thead>
							<tbody>							
							<?php
								$request_query = mysql_query("SELECT * FROM request
									INNER JOIN book ON request.book_id = book.book_id
									INNER JOIN users ON request.user_id = users.user_id 
									 ORDER BY request_id DESC") or die(mysql_error());
								$request_count = mysql_num_rows($request_query);
								while($request_row = mysql_fetch_array($request_query)){
									
									
							?>
							<tr>
								<td><?php echo $request_row['book_barcode']; ?></td>
								<td style="text-transform: capitalize"><?php echo $request_row['school_number']; ?></td>
								<td style="text-transform: capitalize"><?php echo $request_row['firstname']."  ".$request_row['lastname']; ?></td>
								<td style="text-transform: capitalize"><?php echo $request_row['book_title']; ?></td>
								<td><?php echo $request_row['request_date']; ?></td>
								<td><?php echo $request_row['description']; ?></td>
						         <td>
								<form method="post" action="">
								
								<input type="hidden" name="request_id" value="<?php echo $request_row['request_id']; ?>">
								<input type="hidden" name="user_id" value="<?php echo $request_row['user_id']; ?>">
								<input type="hidden" name="book_id" value="<?php echo $request_row['book_id']; ?>">
								<input type="hidden" name="book_title" value="<?php echo $request_row['book_title']; ?>">
								
								<button name="accept" class="btn btn-primary">
							<i class="fa fa-check"></i> Accept</button>
							<button name="delete" class="btn btn-danger">
							<i class="glyphicon glyphicon-remove"></i> Delete</button>
								</form>
								</td>
							</tr>
							
						<?php 
							}
							if ($request_count <= 0){
								echo '
									<table style="float:right;">
										<tr>
											<td style="padding:10px;" class="alert alert-danger">No Request!</td>
										</tr>
									</table>
								';
							} 							
							?>
									<?php
								if (isset($_POST['accept'])) {
									
									$request_id= $_POST['request_id'];
									$user_id= $_POST['user_id'];
									$book_id= $_POST['book_id'];
									
									mysql_query("INSERT INTO response(user_id,book_id,message,response_date)
									VALUES('$user_id','$book_id','Dear customer the requested book is Accepted and you are borrowed.',NOW())") or die (mysql_error());
								mysql_query ("delete from request WHERE request_id= '$request_id'  ") or die (mysql_error());
								
								
							?>
									<script>
										window.location="borrow.php?";
									</script>
									<?php 
																}
																
							?>
									
									<?php
								if (isset($_POST['delete'])) {
									
									$request_id= $_POST['request_id'];
									$user_id= $_POST['user_id'];
									$book_id= $_POST['book_id'];
									mysql_query("INSERT INTO response(user_id,book_id,message,response_date)
									VALUES('$user_id','$book_id','Dear customer the requested book is not borrow at this time.',NOW())") or die (mysql_error());
								mysql_query ("delete from request WHERE request_id= '$request_id'") or die (mysql_error());
								
								
							?>
									<script>
										window.location="view_request.php";
									</script>
									
							<?php 
																}
																
							?>
							</tbody>
							</table>
						</div>
						
                        <!-- content ends here -->
                    </div>
                </div>
            </div>
        </div>

<?php include ('footer.php'); ?>