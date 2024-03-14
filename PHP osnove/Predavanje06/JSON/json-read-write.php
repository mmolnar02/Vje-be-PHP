<?php
    // read the content of the file "polaznici.json"
    $students = file_get_contents(__DIR__."/polaznici.json") or die("Unable to open file!");
   
    // decode the content of the file "polaznici.json"
    $students_data = json_decode($students, true);
    
    // add a new student to the array
    $students_data[] =[
        "name" => "Pero",
        "surname" => "Peric",
        "age" => 25,
        "phone" => "065/123-456",
        "email" => "pero@pero.com"];

    // encode the array of students
    $students = json_encode($students_data);

    // write the content of the file "polaznici.json"
    file_put_contents(__DIR__."/polaznici.json", $students) or die("Unable to write to file!");

?>

<!-- Display data from json -->
<table border="1" cellpadding="10">
    <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <th>Godine</th>
        <th>Broj telefona</th>
        <th>E-mail</th>
    </tr>
    <?php foreach($students_data as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['surname']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['phone']; ?></td>
            <td><?php echo $student['email']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>