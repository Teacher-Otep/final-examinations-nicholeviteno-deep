<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student CRUD</title>

<link rel="stylesheet" href="style.css">
</head>

<body>


<nav class="navbar">
    <img src="images/northhub.svg" id="logo" onclick="showSection('home')">

    <button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
    <button onclick="showSection('update')">Update</button>
    <button onclick="showSection('delete')">Delete</button>
</nav>

<section id="intro" class="content active">
    <div class="intro-box">
        <h1> Student CRUD System</h1>
        <p>Manage student records easily and efficiently</p>
        <p class="hint">👉 Click the logo to continue</p>
        
    </div>
    </section>
<section id="home" class="content">
    <h1>Welcome to Student Management System</h1>
</section>



<section id="create" class="content">
    <h2>Create Student</h2>

    <input type="text" placeholder="Surname:"><br>
    <input type="text" placeholder="Name:"><br>
    <input type="text" placeholder="Middle Name:"><br>
    <input type="text" placeholder="Address:"><br>
    <input type="text" placeholder="Contact:"><br>

    <button>Save</button>
</section>


<section id="read" class="content">
    <h2>View Data</h2>
    <p>No data available</p>
</section>


<section id="update" class="content">
    <h2>Update Student</h2>

    <input type="text" placeholder="Student ID:"><br>
    <input type="text" placeholder="New Name:"><br>
    <input type="text" placeholder="New Address:"><br>

    <button>Update</button>
</section>


<section id="delete" class="content">
    <h2>Delete Student</h2>

    <input type="text" placeholder="Student ID:"><br>
    <button>Delete</button>
</section>

<script src="script.js"></script>

</body>
</html>
