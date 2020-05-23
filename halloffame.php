<?php 
session_start();
if($_SESSION['lives']>0){
    echo $_SESSION['lives'];
    header("location:soal.php");
}
include 'koneksi/koneksi.php';
?>
<html>
<head>
<title>Mathgame</title>
<link rel ="stylesheet" href="css.css">
</head>
<body>
<div id="body" style="width:400px; height:162px;">

    <div id="log_head"><strong>HALL OF FAME</strong>
    </div>
    <form>
    <table width="100%" height="100%" style="background:#FFF; ">
    	<tr height="15"></tr>
        <tr>
            <td align="center">Hello <?php echo $_SESSION['name'];?>... Sayang sekali permainan sudah selesai. semoga kali ini bisa lebih baik<br> 
            Score : <?php echo $_SESSION['score']; ?><br>
            <a href ="index.php" class="tombol">Main Lagi</a>
        </td>

        </tr>
        <tr height="20"></tr>
        
    </table>
    <div class="zebra_table">
    <table width="100%" height="5%" align="center"  cellspacing="0" cellpadding="5">
    <thead>
             <tr>
             <th width="5%" align="center">No</td>
             <th width="25%">Nama</td>
             <th width="30%">Email</td>
             <th width="10%">Score</td>
        	 </tr>
            </thead> 
    <?php
	$query = "SELECT * FROM tbl_identitas Order by Score DESC LIMIT 10 ";
	$sql   =mysql_query($query); 
    $no    =1;

    while ($data=mysql_fetch_array($sql)) {
	        	
        ?>
<tbody>
    	 	<tr>
            <td align="center"><?php echo $no; ?></td>       
            <td align="center"><?php echo $data['Nama']; ?></td>
            <td align="center"><?php echo $data['Email']; ?></td>  
            <td align="center"><?php echo $data['Score']; ?></td>     
            
        <?php $no++;} ?>    
        
    </tbody>
			</table>
		</div>
           
    </form>
    
    
</div>
</body>
</html>