<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
<body>
    <h1>Welcome to Student Management System</h1>
      
<button onclick="showSection('create')">Create</button>
    <button onclick="showSection('read')">Read</button>
    <button onclick="showSection('update')">Update</button>
    <button onclick="showSection('delete')">Delete</button>
    <div id="create" class="section">
        <h2>Insert New Student</h2>
        <input type="text" placeholder="Surname">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Middle Name">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="Mobile Number">
        <button>Save</button>
    </div>
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

   <script src="script.js"></script>
</body>
</html>
