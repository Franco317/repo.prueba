<body>
		<header>
			<a id="index-button" href="../index.html">Ir al inicio</a><br>
			<?php
				
				if ($conection) {
					$rows = mysqli_num_rows($query_result);
					
					if ($rows > 0 ) {
						$current_id = 0;
						while ($row = mysqli_fetch_array($query_result, MYSQLI_ASSOC)) {
							$id = $row['ID_Cliente'];
							if ($id != $current_id) {
								mysqli_query($conection, "UPDATE clientes SET ID_Cliente = $current_id WHERE clientes.ID_Cliente = $id");
								echo "<label>Cliente con id $id actualizado a $current_id.</label>";
							}
							$current_id += 1;
						}
					}
				} else {
					echo "<h1>Fallo de conexi�n.</h1>";
				}
				
			?>
		</header>
	</body>

	<!--cable ethernet cat 5-->
