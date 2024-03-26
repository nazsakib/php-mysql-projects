<?php include 'config.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result System - CRUD</title>


    <!-- links -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-semibold mb-4">Student Information Form</h2>
        <form method="post">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 w-full rounded-md border-gray-300 shadow-sm ">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
            </div>
            <div class="mb-4">
                <label for="roll" class="block text-sm font-medium text-gray-700">Roll Number</label>
                <input type="text" id="roll" name="roll"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
            </div>
            <div class="mb-4">
                <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
                <input type="text" id="class" name="class"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
            </div>
            <div class="mb-4">
                <label for="section" class="block text-sm font-medium text-gray-700">Section</label>
                <input type="text" id="section" name="section"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Subjects & Marks</label>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="subject1" class="block text-sm font-medium text-gray-700">Subject 1</label>
                        <input type="text" id="subject1" name="subject1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
                    </div>
                    <div>
                        <label for="marks1" class="block text-sm font-medium text-gray-700">Marks 1</label>
                        <input type="number" id="marks1" name="marks1"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
                    </div>
                    <div>
                        <label for="subject2" class="block text-sm font-medium text-gray-700">Subject 2</label>
                        <input type="text" id="subject1" name="subject2"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
                    </div>
                    <div>
                        <label for="marks2" class="block text-sm font-medium text-gray-700">Marks 2</label>
                        <input type="number" id="marks2" name="marks2"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm ">
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="w-full bg-indigo-500 text-white px-4 py-2 rounded-md hover:bg-indigo-600"
                    name="sub">Submit</button>
            </div>
        </form>
    </div>
</body>



</html>