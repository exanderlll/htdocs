<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q2</title>

    <style>
        table {
            border-collapse: collapse;
            width: 10%;
            margin: 20px auto;
            border: 5px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    
</head>
<body>
    <?php

        $students = 
        [
            [
                'name' => 'Alice',
                'program' => 'BIP',
                'age' => 21
                
            ],
            [
                'name' => 'Bob',
                'program' => 'BIS',
                'age' => 20
                
            ],
            [
                'name' => 'Raju',
                'program' => 'BIT',
                'age' => 22
                
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

    </table>

</body>
</html>