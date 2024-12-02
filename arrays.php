<?php 

$frutas = array(
  "maçã",
  "banana",
  "laranja",
  "morango",
  "uva"
);

foreach($frutas as $lista){
  echo $lista . "<br>";
}

?>

<?php 

  $pessoas = array(
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
  );

  echo "<br>";
  echo "Nome: " . $pessoas['nome'];
  echo "<br>";
  echo "Idade: " . $pessoas['idade'];
  echo "<br>";
  echo "Cidade: " . $pessoas['cidade'];
  
?>

<?php 

$numeros = array(
  1,2,3,4,5,6,7,8,9,10
);

echo "<br>";
echo "Quantidade de numeros deste array " . count(value: $numeros);

?>

<?php 

$nomes = array(
  "João",
  "Maria",
  "Pedro",
  "Ana",
  "Luiz"
);

sort($nomes);

echo "<br>";
echo "Nomes em ordem alfabetica: " . implode(", ", $nomes);

?>

<?php 

  $cores = array("vermelho", "branco", "rosa", "marrom", "verde");

  echo "<br>";
  echo "Terceiro elemento não removido: " . implode(", ", $cores);

  unset($cores[2]);

  echo "<br>";
  echo "Terceiro elemento removido: " . implode(", ", $cores);

?>

<?php 

$arrayMulti = array(
  array("nome" => "John", "idade" => 20, "nota" => 9.5),
  array("nome" => "Maria", "idade" => 25, "nota" => 8),
  array("nome" => "Pedro", "idade" => 30, "nota" => 7.5),
);

for ($i = 0; $i < count($arrayMulti); $i++) {
  echo "<br><br>";
  echo "Nome: " . $arrayMulti[$i]['nome'] . ",<br>Idade: " . $arrayMulti[$i]["idade"] . ",<br>Nota: " . $arrayMulti[$i]['nota'];
  echo "<br>";
}

?>

<?php 

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$soma = 0; // Inicializa a variável de soma

foreach($numbers as $totalNumbers) {
    $soma += $totalNumbers; // Adiciona cada número à soma
}

echo "A soma dos números é: " . $soma;

?>

<?php 

$valores = array(55,123,33,542,5141);

echo "<br><br>";
echo "O maior número encontrado neste array é: " . max($valores);

?>

<?php 

$names = array("John", "Ana", "Alice", "Abraão", "Abgail");

if (in_array("John", $names)) {
  echo "<br>O nome 'John' está presente no array.";
} else {
  echo "<br>O nome 'John' não está presente no array.";
}

?>

<?php 

$arraynumeros = array(43,44,123,12,66);
function Calcular($numeros) {
  $soma = 0;
  $maior = $numeros[0];
  $quantia = count($numeros);

  foreach ($numeros as $num) {
    $soma += $num;
    if ($num > $maior) {
      $maior = $num;
    }
  }

  $media = $soma/$quantia;

  return array(
    "soma" => $soma,
    "maior" => $maior,
    "media" => $media
  );
}

$resultado = Calcular($arraynumeros);

echo "<br><br>";
echo "Soma: " . $resultado["soma"];
echo "<br>Maior: " . $resultado["maior"];
echo "<br>Média: " . $resultado["media"];

?>