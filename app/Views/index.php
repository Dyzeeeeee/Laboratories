
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/styles.css') ?>">
    
</head>

<body>
    <div class="container">
        <div class="table-container">
            <h1>Student Data</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($studmod as $i) : ?>
                    <tr>
                        <td><?= $i['StudName'] ?></td>
                        <td><?= $i['StudGender'] ?></td>
                        <td><?= $i['StudCourse'] ?></td>
                        <td><?= $i['StudYear'] ?></td>
                        <td><?= $i['StudSection'] ?></td>
                        <td>
                            <a href="/update/<?= $i['id'] ?>">Edit</a>
                            <a href="/delete/<?= $i['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?= $this->include('/include/form'); ?>
    </div>
</body>

</html>