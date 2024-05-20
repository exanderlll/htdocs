<!DOCTYPE html>
<html lan="en">
<head>
    <meta charst="UTF-8">
    <title>Lab 6 Q1</title>

    <style>
        table 
        {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            border: 1px solid #ddd;
        }
        th, td 
        {
            paddinng: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th
        {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <?php
        $name = "Iskandar";
        $matricNumber = "DI220109":
        $course = "Information Technology";
        $yearOfStudy = "2";
        $address = "No 20, Jalan Lombong Timah, Taman Anggerik Permai 3, Seksyen 29, Shah Alam";
    ?>
    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
            <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>

 </table>

</body>
</html>