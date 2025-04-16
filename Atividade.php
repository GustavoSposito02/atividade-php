<?php 

function valorIMC ($p2, $a2){
	$IMC = $p2 / ($a2 * $a2);
	if ($IMC < 18.5 && $IMC >= 0){
echo "Seu IMC é: " . $IMC . ", Você esta abaixo do peso";
}elseif ($IMC >= 18.5 && $IMC <= 24.9){
echo "Seu IMC é: " . $IMC . ", Você esta com peso normal";
}elseif($IMC >= 25 && $IMC <= 2.9){
echo "Seu IMC é: " . $IMC . ", Você esta abaixo do pedo";
}else{
echo "Seu IMC é: " . $IMC . ", Você esta obeso";
}
}

function main(){
$P1 = 80;
$A1 = 1.80;
valorIMC($P1, $A1);
}
main();
 ?>