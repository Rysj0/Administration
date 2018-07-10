<?php require_once 'base.php';?>

<?php
require_once 'dbconfig.php';
// 访问student
$query = "select * from student";
$result = mysql_query($query);
?>
<!-- /. NAV SIDE  -->
<div style="background-image: url(assets/img/4.jpg);background-size: 200% ;background-repeat: no-repeat;">
	<div >
		<div >
			<div >
             <center>
				<h2>学生基本信息</h2>
                </center>
			</div>
		</div>
		<!-- /. ROW  -->
		<hr />
		<div >
			<div>
				<!-- Advanced Tables -->
				<div >
					<div class="panel-heading"><a href='insert.php'>&nbsp; &#128202;添加学生信息</a></div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover"
								id="dataTables-example">
								<thead>
									<tr>
										<th>学号</th>
										<th>姓名</th>
										<th>性别</th>
										<th>班级</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
                        		<?php
                        $line = 0;
                        while ($row = mysql_fetch_array($result)) {
                            $line ++;
                            $linecolor = $line % 2 == 0 ? 'odd gradeX' : 'even gradeC';
                            echo "<tr class='$linecolor'>";
                            echo "<td>" . $row['studentId'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['sex'] . "</td>";
                            echo "<td>" . $row['className'] . "</td>";
                            echo "<td><a href='edit.php?id=" . $row['id'] . "'>修改</a>&nbsp;&nbsp;<a href='delete.php?id=" . $row['id'] . "'>删除</a></td>";
                            echo "</tr>";
                        }
                        ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
				<!--End Advanced Tables -->
			</div>
		</div>

	</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
		$(document).ready(function() {
			$('#dataTables-example').dataTable();
		});
	</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>
</html>

