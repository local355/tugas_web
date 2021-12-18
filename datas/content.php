		<div>
			<table id="tabledatabases" class="data">
				<thead>
					<tr>
						<th class="rows">No</th>
						<th class="rows">No Seri</th>
						<th class="rows">Nama</th>
						<th class="rows">Type</th>
						<th class="rows">Category</th>
						<th class="rows">Jenis</th>
						<th class="rows">Include</th>
						<th class="rows">Description</th>
					</tr>
				</thead>
				<tbody>
				<?php
					include "co.php";
					$f=1;
					$result=mysqli_query($cp,'SELECT * FROM datas');
					$r = mysqli_field_count($cp)-1;
					while ($row=mysqli_fetch_array($result)){
						echo "<tr class='d-row noclick' data-filter-row='INFORMATION_SCHEMA'>";
						echo "<td class='tool'>$f</td>";
						echo "<td class='name'><a href='./$row[7]' title=''>$row[0]</a></td>";
						echo "<td class='value'><dfn title='$row[0]'>$row[1]</dfn></td>";
						echo "<td class='tool'><a class='server_databases' title=''><span class='nowrap'>$row[2]</span></a></td>";
						echo "<td class='value'><dfn title='$row[0]'>$row[3]</dfn></td>";
						echo "<td class='value'><dfn title='$row[0]'>$row[4]</dfn></td>";
						echo "<td class='value'><dfn title='$row[0]'>$row[5]</dfn></td>";
						echo "<td class='value'><dfn title='$row[0]'>$row[6]</dfn></td></tr>";
						$f++;
					}
					$fcount = scandir("files/");
				?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="8">
							<span id="filter-rows-count"><?php echo $f - 1;?></span>: In Total <span><?php echo count($fcount) - 2;?> : Total Files in dir</span>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
