<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Students Info</title>

    <!-- links -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="p-8 text-center text-2xl font-semibold mb-4">Students Information</h1>
        <table class="w-full bg-white shadow-md rounded my-6">
            <thead>
                <tr class="bg-gray-200">
                    <th class="text-left py-2 px-4">Name</th>
                    <th class="text-left py-2 px-4">Email</th>
                    <th class="text-left py-2 px-4">Class</th>
                    <th class="text-left py-2 px-4">Roll</th>
                    <th class="text-left py-2 px-4">Section</th>
                    <th class="text-left py-2 px-4">Subject</th>
                    <th class="text-left py-2 px-4">Marks</th>
                </tr>
            </thead>
            <tbody>

            <?php
            
                $sqlSelect = "select * from `studentsInfo`";
                $connectQuery = mysql_query($connect, $sqlSelect);

                if ($connectQuery) {
                    while ($row = mysqli_fetch_assoc($connectQuery)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $class = $row['class'];
                        $roll = $row['roll'];
                        $section = $row['section'];

                        echo "
                        
                        <tr>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$id</td>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$name</td>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$email</td>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$class</td>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$roll</td>
    <td rowspan='2' class='border border-gray-200 text-left py-2 px-4'>$section</td>
</tr>
                        
                        ";
                    }
                }
            
            ?>

                <!-- <tr>
                    <td rowspan="2" class="border border-gray-200 text-left py-2 px-4">Sakib</td>
                    <td rowspan="2" class="border border-gray-200 text-left py-2 px-4">sakib@gmail.com</td>
                    <td rowspan="2" class="border border-gray-200 text-left py-2 px-4">10</td>
                    <td rowspan="2" class="border border-gray-200 text-left py-2 px-4">101</td>
                    <td rowspan="2" class="border border-gray-200 text-left py-2 px-4">A</td>
                    <td class="border border-gray-200 text-left py-2 px-4">Math</td>
                    <td class="border border-gray-200 text-left py-2 px-4">90</td>
                </tr>
                <tr>
                    <td class="border border-gray-200 text-left py-2 px-4">Science</td>
                    <td class="border border-gray-200 text-left py-2 px-4">85</td>
                </tr> -->
            </tbody>
        </table>
    </div>

</body>

</html>l