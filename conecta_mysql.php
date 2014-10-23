<?php
$conexao = mysqli_connect("localhost","root","linux","Bazarro");
// tratamento de erros
if (mysqli_connect_errno())
{
echo "Não foi possível conectar: " . mysqli_connect_error();
}
?>

