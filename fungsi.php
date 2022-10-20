<?php
    function answer($kode){
        if($kode=='P001'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P002'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P008'>Tidak</a>";
        }
        if($kode=='P002'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P003'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P004'>Tidak</a>";
        }
        if($kode=='P003'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S001'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S002'>Tidak</a>";
        }


        if($kode=='P004'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S003'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P005'>Tidak</a>";
        }
        if($kode=='P005'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S004'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P006'>Tidak</a>";
        }
        if($kode=='P006'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S005'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P007'>Tidak</a>";
        }
        if($kode=='P007'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S006'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S007'>Tidak</a>";
        }


        if($kode=='P008'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P009'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P012'>Tidak</a>";
        }
        if($kode=='P009'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S008'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P010'>Tidak</a>";
        }
        if($kode=='P010'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P011'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S011'>Tidak</a>";
        }
        if($kode=='P011'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S009'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S010'>Tidak</a>";
        }
        if($kode=='P012'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=P013'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S014'>Tidak</a>";
        }
        if($kode=='P013'){
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S012'>Ya</a>";
            echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=S013'>Tidak</a>";
        }
        
    }

    function kesimpulan($solusi){
        include 'koneksi.php';
        $sql = "SELECT * from tb_kesimpulan WHERE solusi='$solusi' AND status='setuju'";
        $data = mysqli_query($connect,$sql);
        while ($row = mysqli_fetch_assoc($data)) {
            echo '<p>- '.$row['fakta'].'</p>';
        }  
    }

    function solusi($kode){
        if ($kode=='S001') {
            $solusi = "S001";
            kesimpulan($solusi);        
        }
        if ($kode=='S002') {
            $solusi = "S002";
            kesimpulan($solusi);        
        }
        if ($kode=='S003') {
            $solusi = "S003";
            kesimpulan($solusi);        
        }
        if ($kode=='S004') {
            $solusi = "S004";
            kesimpulan($solusi);        
        }
        if ($kode=='S005') {
            $solusi = "S005";
            kesimpulan($solusi);        
        }
        if ($kode=='S006') {
            $solusi = "S006";
            kesimpulan($solusi);        
        }
        if ($kode=='S007') {
            $solusi = "S007";
            kesimpulan($solusi);        
        }
        if ($kode=='S008') {
            $solusi = "S008";
            kesimpulan($solusi);        
        }
        if ($kode=='S009') {
            $solusi = "S009";
            kesimpulan($solusi);        
        }
        if ($kode=='S010') {
            $solusi = "S010";
            kesimpulan($solusi);        
        }
        if ($kode=='S011') {
            $solusi = "S011";
            kesimpulan($solusi);        
        }
        if ($kode=='S012') {
            $solusi = "S012";
            kesimpulan($solusi);        
        }
        if ($kode=='S013') {
            $solusi = "S013";
            kesimpulan($solusi);        
        }
        if ($kode=='S014') {
            $solusi = "ERROR";
            kesimpulan($solusi);        
        }
    }

?>