<?php while ($row = mysqli_fetch_row($result)) {
	?>
	<pre>
	<?php
	print_r($row);
	?>
	</pre>
	<?php
	}
	?>