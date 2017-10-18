<?php
include "koneksi.php";
$name=$_POST['name'];
$email=$_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$phone=$_POST['phone'];
$message=$_POST['message'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
$query=mysql_query("INSERT INTO  `max3`.`table` (
`name` ,
`email` ,
`phone` ,
`message`
)
VALUES (
'$name',  '$email',  '$phone',  '$message'
);");
if($query){
	?>
	
<?php
}else{
	echo "Gagal input data";
	echo mysql_error();
}}
?>
        <div class="container">
            <header>
                <h1><span>TERIMA KASIH</span></h1>
				<nav class="codrops-demos">
					<span>
    <form action="tabel2.php" method="get">
    <input type="submit" value="Lihat data di Tabel	" onClick=""/> </form></span>