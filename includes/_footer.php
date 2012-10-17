					</div> <!-- This closes the Content Div-->
					<?php 
					if(isset($_SESSION['user'])){
					?>
					<div id="admin">
						<a href="admin.php">New Blog</a><br>
						<a href="logout.php">Logout</a>
					</div>
					<?php
					};
					?>
			</div><!-- This closes the wrapper Div-->
		</body>
</html>