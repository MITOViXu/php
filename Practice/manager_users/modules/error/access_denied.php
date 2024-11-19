<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Not Found</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
    
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f3f4f6;
      color: #333;
    }

    .container {
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    h1 {
      font-size: 6em;
      color: #ff6b6b;
    }

    h2 {
      font-size: 1.5em;
      margin-bottom: 20px;
    }

    p {
      color: #666;
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    a {
      text-decoration: none;
      color: white;
      background-color: #0073e6;
      padding: 10px 20px;
      border-radius: 5px;
      /* transition: background-color 0.3s; */
    }

    a:hover {
      background-color: #005bb5;
    }

    /* @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    } */
  </style>
</head>
<body>
  <div class="container">
    <img src="https://img.freepik.com/premium-vector/access-denied-alert-vector-illustration-design_624938-543.jpg" alt="">
    <!-- <h1>404</h1> -->
    <h2>Access Denied</h2>
    <p>You don't have permission to access this page !</p>
    <a href="/php/Practice/manager_users/">Back to Homepage</a>
  </div>
</body>
</html>
