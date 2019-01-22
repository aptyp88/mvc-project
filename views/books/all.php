<?php

echo '<table border="1">';
echo '<tr><th>#</th><th>id</th><th>name</th><th>price</th><th>new</th><th>themes</th><th>category</th></tr>';
for($i = 0; $i < count($books); $i++)
{
    $book = $books[$i];
    echo '<tr>';
        // echo '<td>' . ($page * 50 + $i + 1) . '</td>';  
        echo '<td>' . $book -> id . '</td>';
        echo '<td>' . $book -> name . '</td>';
        echo '<td>' . round($book -> price, 2) . '</td>';?>
        <!-- echo '<td><i class="fas fa-check" style=""></i></td>'; -->
        <td><i class="fas fa-check" style="<?php if($book->new==0){echo 'color:#ccc;';}else{echo 'color:#007bff;';}?>"></i></td>
        <?php
        echo '<td>' . $book -> themes . '</td>';
        echo '<td>' . $book -> category . '</td>';
        echo '<td><a href="edit.php?id='.$book->id.'" class="fas fa-edit"></a></td>';
        echo '<td>
            <form method="POST" action="index.php">
                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="'. $book->id.'">
                <!--<button class="fas fa-trash-alt"></button>-->
            </form>
            </td>';  
    echo '</tr>';
}
echo '</table>';