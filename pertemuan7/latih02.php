<?php
   // Percabangan if pada PHP

   $nilai = 70;

   // beri keterangan lulus apabila nilai 65 ke atas

   if( $nilai >= 65 ){
    $ket = "lulus";
   }else{
    $ket = "Tidak Lulus";
   }

   echo "Keterangan: ". $ket;

   