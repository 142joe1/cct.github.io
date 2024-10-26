<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery App</title>
    <link rel="icon" type="image/png" href="images/Logo/logoplate.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('https://i.pinimg.com/564x/ab/6a/08/ab6a0897f4118902a694aaba7c603179.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h1 {
            margin-top: 50px;
            color: #333;
            font-size: 2.5rem;
        }

        .container {
            max-width: 600px;
            width: 90%;
            background-color: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        p {
            font-size: 1.2rem;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        li {
            margin: 15px 0;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #6A5ACD;
            color: white;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        a:hover,
        a:focus {
            background-color: #5a4db1;
            transform: scale(1.05);
        }

        .menu {
            margin: 50px auto;
            max-width: 1000px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 15px;
        }

        .menu-item {
            background-color: #eaeaea;
            border-radius: 8px;
            padding: 20px;
            width: 220px;
            text-align: left;
            transition: transform 0.3s ease;
            flex: 1 1 220px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-item:hover {
            transform: scale(1.05);
        }

        .menu-item h3 {
            margin: 0;
            font-size: 1.3rem;
        }

        .menu-item p {
            font-size: 0.95rem;
            color: #666;
        }

        .order-btn {
            background-color: #6A5ACD;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 10px;
        }

        .order-btn:hover,
        .order-btn:focus {
            background-color: #5a4db1;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            .menu {
                flex-direction: column;
                gap: 20px;
            }

            .menu-item {
                width: 100%;
            }

            .container {
                width: 100%;
                padding: 20px;
            }

            a {
                font-size: 1rem;
                padding: 10px 15px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }

            p {
                font-size: 1rem;
            }

            a {
                font-size: 0.9rem;
                padding: 8px 12px;
            }

            .menu-item h3 {
                font-size: 1.1rem;
            }

            .menu-item p {
                font-size: 0.85rem;
            }

            .order-btn {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to YouChews!</h1>
        <p>Please choose an option below to continue:</p>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Signup</a></li>
        </ul>
    </div>

    <div class="menu">
        <div class="menu-item">
            <h3>Adobong bakal</h3>
            <p>Delicious cheese pizza with fresh toppings.</p>
            <button class="order-btn">Order Now</button>
        </div>
        <div class="menu-item">
            <h3>Tinolang lamok</h3>
            <p>Juicy beef burgers with special sauce.</p>
            <button class="order-btn">Order Now</button>
        </div>
        <div class="menu-item">
            <h3>Letchon langgam</h3>
            <p>Fresh sushi rolls prepared by our chefs.</p>
            <button class="order-btn">Order Now</button>
        </div>
        <div class="menu-item">
            <h3>Pasta na hilaw</h3>
            <p>Classic Italian pasta with homemade sauce.</p>
            <button class="order-btn">Order Now</button>
        </div>
    </div>
</body>

</html>
