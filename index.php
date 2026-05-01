<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
   <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        .section {
            display: none;
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        button {
            margin: 5px;
            padding: 8px 12px;
            cursor: pointer;
        }
        input {
            display: block;
            width: 90%;
            margin: 10px 0;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Welcome to Student Management System</h1>

    <button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
    <button onclick="showSection('update')">Update</button>
    <button onclick="showSection('delete')">Delete</button>

    <!-- CREATE -->
    <div id="create" class="section">
        <h2>Insert New Student</h2>
        <input type="text" placeholder="Surname">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Middle Name">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="Mobile Number">
    </div>
        <button>Save</button>
    
    <div id="read" class="section">
        <h2>Student Records</h2>
        <p>Here you can view student data.</p>
    </div>
    <div id="update" class="section">
        <h2>Update Student</h2>
        <input type="text" placeholder="Enter Student ID">
        <button>Update</button>
    </div>
    <div id="delete" class="section">
        <h2>Delete Student</h2>
        <input type="text" placeholder="Enter Student ID">
        <button>Delete</button>
    </div>

    <script>
        function showSection(sectionId) {
            let sections = document.querySelectorAll('.section');

            sections.forEach(function(section) {
                section.style.display = "none";
            });

            document.getElementById(sectionId).style.display = "block";
        }
    </script>

</body>
</html>
