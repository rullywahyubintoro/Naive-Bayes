<?php
$dataIndikators = ["Laki-laki", "Perempuan", "Mahasiswa", "Bekerja", "Belum Menikah", "Sudah Menikah", "Nilai IPK = A", "Nilai IPK = B"];
$dataDiagnosas = ["Kelulusan Terlambat", "Kelulusan Tepat"];
$dataSets = [
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Perempuan", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Perempuan", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Perempuan", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Perempuan", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Perempuan", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "perempuan", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "perempuan", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Laki-laki", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Bekerja", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Mahasiswa", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Sudah Menikah", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Belum Menikah", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = A", "diagnosa" => "Kelulusan Tepat"],
	["indikator" => "Nilai IPK = B", "diagnosa" => "Kelulusan Terlambat"],

];

if($_GET){
	$nData = count($dataSets);

	/**
	 * P(Ci)
	 */
	$pCis = [];
	foreach($dataDiagnosas as $keyDiagnosa => $valueDiagnosa){
		$nDiagnosa = 0;
		foreach($dataSets as $dataSet){
			if($dataSet['diagnosa'] == $valueDiagnosa){
				$nDiagnosa++;
			}
		}

		$pCi = [
			"diagnosa" => $valueDiagnosa,
			"n_diagnosa" => $nDiagnosa,
			"p_diagnosa" => $nDiagnosa / $nData,
		];
		$pCis[] = $pCi;
	}

	/**
	 * P(X|Ci)*P(Ci)
	 */
	$resNBs = [];
	foreach($pCis as $pCi){
		/**
		 * P(X|Ci)
		 */
		$pXCis = [];
		$pIndikatorDiagnosa = 1;
		foreach($dataIndikators as $keyIndikator => $valueIndikator){
			if(isset($_GET['indikator_'.$keyIndikator])){
				$nIndikatorDiagnosa = 0;
				foreach($dataSets as $dataSet){
					if($dataSet['indikator'] == $valueIndikator && $dataSet['diagnosa'] == $pCi['diagnosa']){
						$nIndikatorDiagnosa++;
					}
				}

				$pXCi = [
					"n_indikator_diagnosa" => $nIndikatorDiagnosa,
					"n_diagnosa" => $pCi['n_diagnosa'],
					"p_indikator_diagnosa" => $nIndikatorDiagnosa / $pCi['n_diagnosa'],
				];
				$pXCis[] = $pXCi;
				
				$pIndikatorDiagnosa = $pIndikatorDiagnosa * $pXCi['p_indikator_diagnosa'];
			}
		}
		$resNB = [
			"p_xci" => $pXCis,
			"p_ci" => $pCi,
			"p_indikator_diagnosa" => $pIndikatorDiagnosa,
			"p_xci_p_ci" => $pIndikatorDiagnosa * $pCi['p_diagnosa'],
		];
		$resNBs[] = $resNB;
	}

	$p_xci_p_ci = array_column($resNBs, 'p_xci_p_ci');
	array_multisort($p_xci_p_ci, SORT_DESC, $resNBs);

	// print_r($resNBs);die;
}

echo "
<h1 style='text-align:center;'>Naive Bayes</h1>
<h4 style='text-align:center;'>By. Rully Wahyu Bintoro</h4>
<hr>
<h2>Data Set</h2>
<table>
	<tr>
		<th>no</th>
		<th>Indikator</th>
		<th>Diagnosa</th>
	</tr>";
	$i = 0;
	foreach($dataSets as $dataSet){
		$i++;
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$dataSet['indikator']."</td>
			<td>".$dataSet['diagnosa']."</td>
		</tr>";
	}
echo "
</table>
<hr/>
<form action='naivebayes.php' method='get'>
	<h2>Testing Data</h2>
	<table>";
	foreach($dataIndikators as $keyIndikator => $valueIndikator){
		isset($_GET['indikator_'.$keyIndikator]) ? $checked = "checked" : $checked = "";
		echo "
		<tr>
			<td><input type='checkbox' id='indikator_".$keyIndikator."' name='indikator_".$keyIndikator."' ".$checked."></td>
			<td>".$valueIndikator."</td>
		</tr>";
	}
	echo "
	</table>
	<button id='send' name='send'>Prediksi Kelulusan</button>
</form>";
if($_GET){
	echo "
	<hr/>
	<div>
		<h2>Result</h2>
		<ul>";
		foreach($dataIndikators as $keyIndikator => $valueIndikator){
			if(isset($_GET['indikator_'.$keyIndikator])){
				echo "<li>".$valueIndikator."</li>";
			}
		}
		echo "
		</ul>
		<b>".$resNBs['0']['p_ci']['diagnosa']."</b> 
		<i>(";
		foreach($resNBs as $keyResNB => $resNB){
			$keyResNB == 0 ? $res = $resNB['p_ci']['diagnosa']." : ".$resNB['p_xci_p_ci'] : $res = ", ".$resNB['p_ci']['diagnosa']." : ".$resNB['p_xci_p_ci'];
			echo $res;
		}
		echo "
		)</i>
	</div>
	";
}
?>
