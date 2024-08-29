<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.dashboard {
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    width: 500px;
    text-align: center;
}

h1 {
    color: #333;
    margin-bottom: 20px;
}

.stats {
    display: flex;
    justify-content: space-between;
    margin-bottom: 40px;
}

.card {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    border-radius: 8px;
    width: 45%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card h2 {
    margin: 0;
    font-size: 20px;
}

.card p {
    font-size: 36px;
    margin: 10px 0;
}

.management h2 {
    font-size: 22px;
    color: #333;
    margin: 20px 0;
}

button {
    padding: 10px 20px;
    font-size: 18px;
    color: white;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        <div class="stats">
            <div class="card">
                <h2>Total Users</h2>
                <p>0</p>
            </div>
            <div class="card">
                <h2>Total Cabs</h2>
                <p>0</p>
            </div>
        </div>
        <div class="management">
            <h2>Manage Users</h2>
            <button onclick="window.location.href='manage_users.php'">Manage Users</button>

            <h2>Manage Cabs</h2>
            <button onclick="window.location.href='manage_cabs.php'">Manage Cabs</button>
        </div>
    </div>
</body>
</html>
