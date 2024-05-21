<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container label {
            margin: 5px 0;
        }
        .form-container input, .form-container select {
            margin: 5px 0 10px 0;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .form-container button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<form action="./data.process.php" method="post">
<div class="form-container">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="course">Select Course:</label>
    <select id="course" name="course" required>
        <option value="">Select a course</option>
        <option value="course1">HTML</option>
        <option value="course2">CSS</option>
        <option value="course3">Javascript</option>
    </select>

   <a href=""></a> <button type="submit">Register</button>
</div>
</form>
</body>
</html>
