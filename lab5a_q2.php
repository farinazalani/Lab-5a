<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q2</title>
</head>
<body>

<?php $students = [
    [
        'name' => 'Farina',
        'program' => 'BIW',
        'age' => 23
    ],
    [
        'name' => 'Ashimah',
        'program' => 'BIW',
        'age' => 22
    ],
    [
        'name' => 'Fariza',
        'program' => 'BIW',
        'age' => 23
    ]
    ];

?> 
   <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['program']; ?></td>
                <td><?php echo $student['age']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>