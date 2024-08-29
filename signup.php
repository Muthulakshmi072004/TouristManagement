<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><align=sideSign up></align></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #999;
            background-size: cover;
            margin: 2;
            padding: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 10px;
            border-radius: 5px;
            width: 95%;
            max-width: 300px;
        }
        h1 {
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #ffffff;
        }
        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 20px;
            background-color: #00ff66;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #02ff46;
        }
        .error {
            color: rgb(255, 49, 49);
            margin-top: -10px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .userinput{
            display:flex;
            align-items:center;
            justify-content:center;
            border: 2px solid;
            border-radius:10px;
            margin:10px;
        }
        .userinput input{
            height:20px; 
        }
        .userinput label{
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="signupConnection.php" method="POST">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="email">Email ID</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <div class="userinput"> 
                <select name="role" id="role">
                    <option value="" selected disable>SELECT THE ROLE</option>
                    <option value="user">user</option>
                    <option value="cab">cab</option>
                </select>
            </div>

            <button type="submit">Done</button>
        </form>
    </div>
</body>
</html>
