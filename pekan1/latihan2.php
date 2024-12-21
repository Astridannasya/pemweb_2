<?php

$ns1= ['id'=>1, 'nim'=>'10001', 'uts'=>80, 'uas'=>80, 'tugas'=>90];
$ns2= ['id'=>2, 'nim'=>'10002', 'uts'=>90, 'uas'=>80, 'tugas'=>92];
$ns3= ['id'=>3, 'nim'=>'10003', 'uts'=>70, 'uas'=>80, 'tugas'=>93];
$ns4= ['id'=>4, 'nim'=>'10004', 'uts'=>60, 'uas'=>80, 'tugas'=>94];


$ar_nilai = [$ns1, $ns2, $ns3, $ns4];

?>

<h3>Daftar Nilai</h3>

<table border="1" width="100%">
    <thead>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Tugas</th>
        <th>Tugas Akhir</th>
    </tr>
    </thead>

    <tbody>
        <?php $no=1;
        foreach ($ar_nilai as $nilai) 
        $nilai_akhir = ($nilai['uts'] + $nilai['uas'] + $nilai['tugas']) / 3; { ?>

        <tr>
        <td><?= $no ?></td>
        <td><?= $nilai['nim'] ?></td>
        <td><?= $nilai['uts'] ?></td>
        <td><?= $nilai['uas'] ?></td>
        <td><?= $nilai['tugas'] ?></td>
        <td><?= $nilai_akhir ?></td>

        </tr>  

        <?php $no++; } ?>

    </tbody>

</table>