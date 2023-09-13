<!DOCTYPE html>
<html>
<head>
    <title>Matriz Aleatória</title>
</head>
<body>
    <?php
    // Tamanho da matriz
    $x = 5; // número de linhas
    $y = 5; // número de colunas

    // Gerar a matriz com valores aleatórios
    $matriz = array();
    for ($i = 0; $i < $x; $i++) {
        $row = array();
        for ($j = 0; $j < $y; $j++) {
            $row[] = rand(1, 1000);
        }
        $matriz[] = $row;
    }

    // Exibir a matriz como uma tabela HTML
    echo '<table border="1">';
    for ($i = 0; $i < $x; $i++) {
        echo '<tr>';
        for ($j = 0; $j < $y; $j++) {
            echo '<td>' . $matriz[$i][$j] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>
</html>
