<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Academic System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="container">
        <h1>Login Page</h1>
        <form id="loginForm" action="connect.php" method="POST">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
    
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
    
          <label for="role">Role:</label>
          <select id="role" name="role">
            <option value="admin" name="admin">Admin</option>
            <option value="teacher" name="teacher">Teacher</option>
            <option value="student" name="student">Student</option>
          </select>
    
          <button type="submit">Login</button>
        </form>
      </div>
    
      <!-- <script src="Index.js"></script> -->
    
</body>
</html>