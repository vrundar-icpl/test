<!DOCTYPE html>
<html>
<head>
    <title>Task1</title>
</head>
<body>
    <form method="POST" onsubmit="return task1()">
        <input type="number" name="id" id="id" placeholder="Enter ID">
        <input type="text" name="name" id="name" placeholder="Enter name">
        <!-- <input type="number" name="id" id="id" placeholder="Enter ID"> -->
        <button type="submit">Search</button>
    </form>
 
    <script>
        function task1() {
            var id = document.getElementById("id").value;
            var name = document.getElementById("name").value;
            alert("Submitted ID: " + id + "name is " + name );
            
            return true; // To allow the form submission to proceed
        }
    </script>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name=$_POST['name'];
        // Rest of your PHP code here
    }
    ?>
</body>
</html>
 