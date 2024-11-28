<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 5a Q1</title>
</head>
<body>

    <?php $name = "NurFarina Binti Mohd Zalani";?>
    <?php $noMatric ="Ci230087" ?>
    <?php $course = "BIW" ?>
    <?php $yearOfStudy = "2"; ?>
    <?php $address = "Pasir Puteh, Kelantan"?>

    <table>
        <tr>
            <th> Name: </th>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <th> No Matric: </th>  
            <td><?php echo "$noMatric"; ?></td>
        </tr>
        <tr>
            <th> Course: </th>
            <td><?php echo "$course"; ?></td><br>
        </tr>
        <tr>
            <th> Year of Study: </th>
            <td><?php echo "$yearOfStudy"; ?></td><br>
        </tr>
        <tr>
            <th> Address: </th>
            <td><?php echo "$address"; ?></td><br>
        </tr>
    </table>
</body>
</html>