<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include("connect.php");



// Display success or error messages
if (isset($_SESSION['message'])) {
    echo "<div class='alert alert-success'>" . $_SESSION['message'] . "</div>";
    unset($_SESSION['message']);
}
if (isset($_SESSION['error'])) {
    echo "<div class='alert alert-danger'>" . $_SESSION['error'] . "</div>";
    unset($_SESSION['error']);
}
?>

<!-- Register Member Button -->
<button class="btn btn-primary" onclick="showRegisterForm()">Register Member</button>

<!-- Register Member Form (Initially Hidden) -->
<div id="registerForm" style="display:none; margin-top:20px;">
    <h2>Register Member</h2>
    <form method="POST" action="register_member.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" id="address" required>
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Telephone</label>
            <input type="text" class="form-control" name="telephone" id="telephone" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <button type="submit" class="btn btn-success">Register</button>
        <button type="button" class="btn btn-secondary" onclick="hideRegisterForm()">Cancel</button>
    </form>
</div>

<script>
    // Show the register form
    function showRegisterForm() {
        document.getElementById('registerForm').style.display = 'block';
    }

    // Hide the register form
    function hideRegisterForm() {
        document.getElementById('registerForm').style.display = 'none';
    }
</script>

<?php
// Fetch user data with role 'user' from the database
$query = "SELECT id, firstName, lastName, email, role FROM users WHERE role = 'user'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo "<th>Role</th>";
    echo "<th>Action</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Fetch rows from the result set
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['firstName']) . "</td>";
        echo "<td>" . htmlspecialchars($row['lastName']) . "</td>";
        echo "<td>" . htmlspecialchars($row['email']) . "</td>";
        echo "<td>" . htmlspecialchars($row['role']) . "</td>";
        echo "<td>
                <form method='POST' style='display:inline-block;' action='delete_user.php'>
                    <input type='hidden' name='id' value='" . $row['id'] . "'>
                    <button type='submit' class='btn btn-danger'>Delete</button>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No users found with the role 'user' in the database.</p>";
}

$conn->close();
?>
