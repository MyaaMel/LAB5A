<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1 - Personal Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #FFC0CB;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <?php 
        $name = "ASSAMI'AH BINTI NORHARMIZI";
        $matric_number = "DI220023";
        $course = "BACHELOR OF COMPUTER SCIENCE";
        $year_of_study = "3rd YEAR";
        $address = "BLOK 100-05-01, PPR SRI PANTAI, PANTAI DALAM, 59200 BANGSAR KUALA LUMPUR";
    ?>

    <table>
        <tr>
            <th>Details</th>
           <th>Information</th>
        </tr>
        <tr>
            <td>Name : </td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number : </td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course : </td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study : </td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address : </td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
