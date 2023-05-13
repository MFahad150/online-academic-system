document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();
  
    // Retrieve form values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var role = document.getElementById("role").value;
  
    // Perform login based on the selected role
    if (role === "admin") {
      // Handle admin login
      if (username === "admin" && password === "admin123") {
        alert("Admin login successful!");
        // Redirect to admin dashboard
        window.location.href = "admin_dashboard.html";
      } else {
        alert("Invalid admin credentials");
      }
    } else if (role === "teacher") {
      // Handle teacher login
      if (username === "teacher" && password === "teacher123") {
        alert("Teacher login successful!");
        // Redirect to teacher dashboard
        window.location.href = "teacher_dashboard.html";
      } else {
        alert("Invalid teacher credentials");
      }
    } else if (role === "student") {
      // Handle student login
      if (username === "student" && password === "student123") {
        alert("Student login successful!");
        // Redirect to student dashboard
        window.location.href = "student_dashboard.html";
      } else {
        alert("Invalid student credentials");
      }
    } else {
      alert("Invalid role");
    }
  });
  