<table border="1">
    <tr><th>id</th><th>name</th><th>email</th><th>date</th><th>Количество отзывов</th><th>Delete</th></tr>
    <?php
    // print_r($users);
    foreach ($users as $user) : ?>
    <tr>
    <td><?= $user -> id?></td>
    <td><?= $user -> name?></td>
    <td><?= $user -> email?></td>
    <td><?= $user -> created_at?></td>
    <td><?= $user -> count?></td>
    <td>
        <form method="POST" action="/user/delete">
            <input type="hidden" name="user" value="delete">
            <input type="hidden" name="id" value="<?=$user->id?>">
            <button class="fas fa-trash-alt"></button>
        </form>
    </td>
    </tr>
    <?php endforeach ?>
</table>