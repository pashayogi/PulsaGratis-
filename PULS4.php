<?php
//warna
$biru="\033[1;34m";
$turkis="\033[1;36m";
$ijo="\033[92m";
$putih="\033[1;37m";
$pink="\033[1;35m";
$red="\033[1;31m";
$kuning="\033[1;33m";
$t = "\n";
//waktu
$today = date("d M Y");
$d = date("D");
echo $biru. "Tanggal :".$today;
echo $biru. "Hari ";
if($d == "Sun") {
	echo "Minggu";
}
elseif ($d == "Mon") {
	echo "Senin";
}
elseif ($d == "Tue") {
	echo "Selasa";
}
elseif ($d == "Wed") {
	echo "Rabu";
}
elseif ($d == "Thu") {
	echo "Kamis";
}
elseif ($d == "Fri") {
	echo "Jumat";
}
elseif ($d == "Sat") {
	echo "Sabtu";
}

//pilih
print $ijo."
____ _ _ _ ____ _
| _ \| | | | | / ___| / \
| |_) | | | | | \___ \ / _ \
| __/| |_| | |___ ___) / ___ \
|_| \___/|_____|____/_/ \_\".$t;

echo $putih  coded by : MR.K7C8NG Team :InDoNeSiA CYBER ErRoR SyStEm |"."Tools Hack Pulsa|".$t.$t;
echo $putih."A L L O P E R A T O R  ".$t;
sleep(2);
echo $ijo. "Masukan nomor mantan lu/kalo gak punya nomor lu aja : ".$t;
$nomer = trim(fgets(STDIN)); 
echo $ijo. "Masukan jumlah pulsa :".$t;
$pulsa = trim(fgets(STDIN));
echo "";
echo "";
echo "";
sleep(2);
echo $red. "SUKSES TERKIRIM !!".$t;
sleep(1);
echo "";
echo "";
echo "";
echo "";
echo "";
echo $biru." [>]".$red."Selamat Nomor ".$nomer." Mendapatkan Pulsa[<]".$t;
echo $pink." [>]".$putih."Sebesar Rp.".$pulsa." Jika Anda Butuh Bantuan[<]". $t;
echo $red." [>]".$ijo."Mohon Hubungi *888# TERIMA KASIH[<]". $t;
echo $kuning." [>]".$turkis."jika tidak masuk berati lu gak beruntung[<]". $t;
echo $putih." [>]".$biru."adu pantun kuy[<]".$t;
echo $ijo." [>]".$pink."ikan hiu nabrak kaca I LOVE YOU BUAT YANG BACA[<]".$t;
echo "";
?>
