<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fullname = htmlspecialchars($_POST['fullname']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $course = htmlspecialchars($_POST['course']);
  $address = htmlspecialchars($_POST['address']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Application Submitted</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    background-size: 400% 400%;
    animation: gradientMove 10s ease infinite;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
  }
  @keyframes gradientMove {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }
  .container {
    max-width: 600px;
    background: rgba(255, 255, 255, 0.15);
    backdrop-filter: blur(15px);
    padding: 35px 40px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    text-align: left;
    animation: fadeIn 0.8s ease-in-out;
  }
  @keyframes fadeIn {
    from {opacity: 0; transform: translateY(10px);}
    to {opacity: 1; transform: translateY(0);}
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
    font-weight: 600;
  }
  p {
    margin: 8px 0;
    line-height: 1.5;
    font-size: 16px;
  }
  hr {
    border: 0;
    height: 1px;
    background: rgba(255, 255, 255, 0.3);
    margin: 15px 0;
  }
  .btns {
    text-align: center;
    margin-top: 20px;
  }
  a, button {
    text-decoration: none;
    background: linear-gradient(90deg, #4facfe, #00f2fe);
    border: none;
    padding: 10px 20px;
    color: white;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
  }
  a:hover, button:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(0, 242, 254, 0.7);
  }
</style>
</head>
<body>
  <div class="container">
    <h2>🎉 Application Submitted Successfully!</h2>
    <p><strong>Full Name:</strong> <?= $fullname ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Address:</strong> <?= $address ?></p>
    <hr>
    <p style="color:#9effa9; font-weight:600;">Thank you for registering!</p>
    <div class="btns">
      <a href="index.php">⬅ Go Back</a>
      <button onclick="window.print()">🖨 Print</button>
    </div>
  </div>
</body>
</html>

<?php
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Registration Form</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      background-size: 400% 400%;
      animation: gradientMove 10s ease infinite;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }
    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    .container {
      width: 90%;
      max-width: 480px;
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 35px 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      color: #fff;
      text-align: center;
      transition: 0.4s ease;
    }
    .container:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
    h2 {
      font-weight: 600;
      margin-bottom: 25px;
      color: #fff;
      letter-spacing: 0.5px;
    }
    .form-group {
      text-align: left;
      margin-bottom: 18px;
    }
    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
      color: #dcdcdc;
    }
    input, select, textarea {
      width: 100%;
      padding: 10px 12px;
      border: none;
      border-radius: 10px;
      font-size: 15px;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
      outline: none;
      transition: all 0.3s ease;
      appearance: none;
    }
    input:focus, select:focus, textarea:focus {
      background: rgba(255, 255, 255, 0.3);
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    }

    /* ✅ Fixed Dropdown Styling */
    select {
      background-color: rgba(255, 255, 255, 0.2);
      color: #fff;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      padding-right: 30px;
      background-image: url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D'10'%20height%3D'7'%20xmlns%3D'http%3A//www.w3.org/2000/svg'%3E%3Cpath%20d%3D'M0%200l5%207%205-7'%20fill%3D'%23ffffff'%20/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 12px;
      cursor: pointer;
    }
    select option {
      background-color: #ffffff;
      color: #333333;
      font-weight: 500;
    }
    select:hover {
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
    }
    select:invalid {
      color: #ddd;
    }

    button {
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #4facfe, #00f2fe);
      border: none;
      color: white;
      font-size: 17px;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s ease-in-out;
      font-weight: 600;
      letter-spacing: 0.5px;
      box-shadow: 0 0 15px rgba(79, 172, 254, 0.4);
    }
    button:hover {
      background: linear-gradient(90deg, #00f2fe, #4facfe);
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(0, 242, 254, 0.7);
    }
    textarea {
      resize: none;
    }
    @media screen and (max-width: 480px) {
      .container {
        padding: 25px 20px;
      }
      h2 {
        font-size: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Online Application / Registration Form</h2>
    <form method="POST" action="">
      <div class="form-group">
        <label>Full Name:</label>
        <input type="text" name="fullname" required>
      </div>

      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" required>
      </div>

      <div class="form-group">
        <label>Phone:</label>
        <input type="tel" name="phone" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
        <select name="gender" required>
          <option value="" disabled selected>-- Select --</option>
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>Course Applied For:</label>
        <input type="text" name="course" required>
      </div>

      <div class="form-group">
        <label>Address:</label>
        <textarea name="address" rows="3" required></textarea>
      </div>

      <button type="submit">Submit Application</button>
    </form>
  </div>
</body>
</html>
<?php
}
?>