<?php
$dataSets = array(
	/*  1 */ array("jk" => "L", "status" => "Mahasiswa", "kawin" => "Belum", "ipk" => "A", "lulus" => "Tepat",),
	/*  2 */ array("jk" => "L", "status" => "Bekerja", "kawin" => "Belum", "ipk" => "A", "lulus" => "Tepat",),
	/*  3 */ array("jk" => "P", "status" => "Mahasiswa", "kawin" => "Belum", "ipk" => "A", "lulus" => "Tepat",),
	/*  4 */ array("jk" => "P", "status" => "Mahasiswa", "kawin" => "Menikah", "ipk" => "A", "lulus" => "Tepat",),
	/*  5 */ array("jk" => "L", "status" => "Bekerja", "kawin" => "Menikah", "ipk" => "A", "lulus" => "Tepat",),
	/*  6 */ array("jk" => "L", "status" => "Bekerja", "kawin" => "Menikah", "ipk" => "B", "lulus" => "Terlambat",),
	/*  7 */ array("jk" => "P", "status" => "Bekerja", "kawin" => "Menikah", "ipk" => "A", "lulus" => "Terlambat",),
	/*  8 */ array("jk" => "P", "status" => "Bekerja", "kawin" => "Belum", "ipk" => "B", "lulus" => "Terlambat",),
	/*  9 */ array("jk" => "L", "status" => "Bekerja", "kawin" => "Belum", "ipk" => "B", "lulus" => "Terlambat",),
	/* 10 */ array("jk" => "P", "status" => "Mahasiswa", "kawin" => "Menikah", "ipk" => "B", "lulus" => "Terlambat",),
	/* 11 */ array("jk" => "P", "status" => "Mahasiswa", "kawin" => "Belum", "ipk" => "B", "lulus" => "Terlambat",),
	/* 12 */ array("jk" => "P", "status" => "Mahasiswa", "kawin" => "Belum", "ipk" => "A", "lulus" => "Tepat",),
	/* 13 */ array("jk" => "L", "status" => "Bekerja", "kawin" => "Menikah", "ipk" => "A", "lulus" => "Tepat",),
	/* 14 */ array("jk" => "L", "status" => "Mahasiswa", "kawin" => "Menikah", "ipk" => "A", "lulus" => "Tepat",),
	/* 15 */ array("jk" => "L", "status" => "Mahasiswa", "kawin" => "Belum", "ipk" => "B", "lulus" => "Terlambat",),
);

if($_GET){
	/**
	 * Naive Bayes Algorithm
	 */
	
	$nData = 0;
	/** var Ci **/
	$nLulusTepat = 0;
	$nLulusTerlambat = 0;

	/** var X **/
	$nJkLLulusTepat = 0;
	$nJkLLulusTerlambat = 0;
	$nJkPLulusTepat = 0;
	$nJkPLulusTerlambat = 0;
	$nStatusBekerjaLulusTepat = 0;
	$nStatusBekerjaLulusTerlambat = 0;
	$nStatusMahasiswaLulusTepat = 0;
	$nStatusMahasiswaLulusTerlambat = 0;
	$nKawinMenikahLulusTepat = 0;
	$nKawinMenikahLulusTerlambat = 0;
	$nKawinBelumLulusTepat = 0;
	$nKawinBelumLulusTerlambat = 0;
	$nIpkALulusTepat = 0;
	$nIpkALulusTerlambat = 0;
	$nIpkBLulusTepat = 0;
	$nIpkBLulusTerlambat = 0;

	foreach($dataSets as $dataSet){
		/** Jumlah Data **/
		$nData++;
		
		/** jk **/
		if($dataSet['jk'] == "L"){
			if($dataSet['lulus'] == "Tepat"){
				$nJkLLulusTepat++;
			}else{
				$nJkLLulusTerlambat++;
			}
		}else{
			if($dataSet['lulus'] == "Tepat"){
				$nJkPLulusTepat++;
			}else{
				$nJkPLulusTerlambat++;
			}
		}

		/** status **/
		if($dataSet['status'] == "Bekerja"){
			if($dataSet['lulus'] == "Tepat"){
				$nStatusBekerjaLulusTepat++;
			}else{
				$nStatusBekerjaLulusTerlambat++;
			}
		}else{
			if($dataSet['lulus'] == "Tepat"){
				$nStatusMahasiswaLulusTepat++;
			}else{
				$nStatusMahasiswaLulusTerlambat++;
			}
		}

		/** kawin **/
		if($dataSet['kawin'] == "Menikah"){
			if($dataSet['lulus'] == "Tepat"){
				$nKawinMenikahLulusTepat++;
			}else{
				$nKawinMenikahLulusTerlambat++;
			}
		}else{
			if($dataSet['lulus'] == "Tepat"){
				$nKawinBelumLulusTepat++;
			}else{
				$nKawinBelumLulusTerlambat++;
			}
		}

		/** ipk **/
		if($dataSet['ipk'] == "A"){
			if($dataSet['lulus'] == "Tepat"){
				$nIpkALulusTepat++;
			}else{
				$nIpkALulusTerlambat++;
			}
		}else{
			if($dataSet['lulus'] == "Tepat"){
				$nIpkBLulusTepat++;
			}else{
				$nIpkBLulusTerlambat++;
			}
		}

		/** lulus **/
		if($dataSet['lulus'] == "Tepat"){
			$nLulusTepat++;
		}else{
			$nLulusTerlambat++;
		}
	}

	/**
	 * P(Ci)
	 */
	$pLulusTepat = $nLulusTepat / $nData;
	$pLulusTerlambat = $nLulusTerlambat / $nData;

	/**
	 * P(X|Ci)
	 */

	/** jk **/
	if($_GET['jk'] == "L"){
		$pJkXLulusTepat = $nJkLLulusTepat / $nLulusTepat;
		$pJkXLulusTerlambat = $nJkLLulusTerlambat / $nLulusTerlambat;
	}else{
		$pJkXLulusTepat = $nJkPLulusTepat / $nLulusTepat;
		$pJkXLulusTerlambat = $nJkPLulusTerlambat / $nLulusTerlambat;
	}

	/** status **/
	if($_GET['status'] == "Bekerja"){
		$pStatusXLulusTepat = $nStatusBekerjaLulusTepat / $nLulusTepat;
		$pStatusXLulusTerlambat = $nStatusBekerjaLulusTerlambat / $nLulusTerlambat;
	}else{
		$pStatusXLulusTepat = $nStatusMahasiswaLulusTepat / $nLulusTepat;
		$pStatusXLulusTerlambat = $nStatusMahasiswaLulusTerlambat / $nLulusTerlambat;
	}

	/** kawin **/
	if($_GET['kawin'] == "Menikah"){
		$pKawinXLulusTepat = $nKawinMenikahLulusTepat / $nLulusTepat;
		$pKawinXLulusTerlambat = $nKawinMenikahLulusTerlambat / $nLulusTerlambat;
	}else{
		$pKawinXLulusTepat = $nKawinBelumLulusTepat / $nLulusTepat;
		$pKawinXLulusTerlambat = $nKawinBelumLulusTerlambat / $nLulusTerlambat;
	}

	/** ipk **/
	if($_GET['ipk'] == "A"){
		$pIpkXLulusTepat = $nIpkALulusTepat / $nLulusTepat;
		$pIpkXLulusTerlambat = $nIpkALulusTerlambat / $nLulusTerlambat;
	}else{
		$pIpkXLulusTepat = $nIpkBLulusTepat / $nLulusTepat;
		$pIpkXLulusTerlambat = $nIpkBLulusTerlambat / $nLulusTerlambat;
	}

	$pXLulusTepat = $pJkXLulusTepat * $pStatusXLulusTepat * $pKawinXLulusTepat * $pIpkXLulusTepat;
	$pXLulusTerlambat = $pJkXLulusTerlambat * $pStatusXLulusTerlambat * $pKawinXLulusTerlambat * $pIpkXLulusTerlambat;

	/**
	 * P(X|Ci)*P(Ci)
	 */
	
	$resLulusTepat = $pXLulusTepat * $pLulusTepat;
	$resLulusTerlambat = $pXLulusTerlambat * $pLulusTerlambat;

	$resLulusTepat > $resLulusTerlambat ? $resPrediksiLulus = "Tepat" : $resPrediksiLulus = "Terlambat";

}

echo "
<h1 style='text-align:center;'>Naive Bayes</h1>
<h4 style='text-align:center;'>By. Rully Wahyu Bintoro</h4>
<hr>
<h2>Data Set</h2>
<table>
	<tr>
		<th>no</th>
		<th>jk</th>
		<th>status</th>
		<th>kawin</th>
		<th>ipk</th>
		<th>lulus</th>
	</tr>";
	$i = 0;
	foreach($dataSets as $dataSet){
		$i++;
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$dataSet['jk']."</td>
			<td>".$dataSet['status']."</td>
			<td>".$dataSet['kawin']."</td>
			<td>".$dataSet['ipk']."</td>
			<td>".$dataSet['lulus']."</td>
		</tr>";
	}
echo "
</table>
<hr/>
<form action='naivebayes.php' method='get'>
	<h2>Testing Data</h2>
	<table>
		<tr>
			<td>jk</td>
			<td>
				<select id='jk' name='jk'>";
					$optJkL = "";
					$optJkP = "";
					if($_GET){
						$_GET['jk'] == "L" ? $optJkL = "selected" : $optJkP = "selected";
					}
					echo "
					<option value='L' ".$optJkL.">L</option>
					<option value='P' ".$optJkP.">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>status</td>
			<td>
				<select id='status' name='status'>";
					$optStatusBekerja = "";
					$optStatusMahasiswa = "";
					if($_GET){
						$_GET['status'] == "Bekerja" ? $optStatusBekerja = "selected" : $optStatusMahasiswa = "selected";
					}
					echo "
					<option value='Bekerja' ".$optStatusBekerja.">Bekerja</option>
					<option value='Mahasiswa' ".$optStatusMahasiswa.">Mahasiswa</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>kawin</td>
			<td>
				<select id='kawin' name='kawin'>";
					$optKawinMenikah = "";
					$optKawinBelum = "";
					if($_GET){
						$_GET['kawin'] == "Menikah" ? $optKawinMenikah = "selected" : $optKawinBelum = "selected";
					}
					echo "
					<option value='Menikah' ".$optKawinMenikah.">Menikah</option>
					<option value='Belum' ".$optKawinBelum.">Belum</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>ipk</td>
			<td>
				<select id='ipk' name='ipk'>";
					$optIpkA = "";
					$optIpkB = "";
					if($_GET){
						$_GET['ipk'] == "A" ? $optIpkA = "selected" : $optIpkB = "selected";
					}
					echo "
					<option value='A' ".$optIpkA.">A</option>
					<option value='B' ".$optIpkB.">B</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><button id='send' name='send'>Prediksi Kelulusan</button></td>
		</tr>
	</table>
</form>";
if($_GET){
	echo "
	<hr/>
	<div>
		<h2>Result</h2>
		<table>
			<tr>
				<td>jk</td>
				<td>: ".$_GET['jk']."</td>
			</tr>
			<tr>
				<td>status</td>
				<td>: ".$_GET['status']."</td>
			</tr>
			<tr>
				<td>kawin</td>
				<td>: ".$_GET['kawin']."</td>
			</tr>
			<tr>
				<td>ipk</td>
				<td>: ".$_GET['ipk']."</td>
			</tr>
			<tr>
				<td>lulus</td>
				<td>: <b>".$resPrediksiLulus."</b> <i>(Tepat : ".$resLulusTepat." | Terlambat : ".$resLulusTerlambat.")</i></td>
			</tr>
		</table>
	</div>
	";
}
?>