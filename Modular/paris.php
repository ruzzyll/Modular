<?php
// paris.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fafafa;
            margin: 0;
        }

        header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            margin: 20px;
        }

        nav {
            flex: 1 1 30%;
            background: #ccc;
            padding: 20px;
            margin-right: 20px;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            margin-bottom: 10px;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            display: block;
            padding: 5px 0;
        }

        nav a:hover {
            color: #666;
        }

        article {
            flex: 2 1 60%;
            background-color: #f1f1f1;
            padding: 20px;
        }

        article h1 {
            margin-bottom: 15px;
            color: #333;
        }

        article p {
            color: #666;
            line-height: 1.6;
        }

        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        @media (max-width: 768px) {
            section {
                flex-direction: column;
                margin: 10px;
            }

            nav, article {
                flex: 1 1 100%;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>

<header>
    <h2>Paris</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="london.php">London</a></li>
            <li><a href="paris.php">Paris</a></li>
            <li><a href="tokyo.php">Tokyo</a></li>
        </ul>
    </nav>

    <article>
        <h1>Paris</h1>
        <p>Paris is the capital city of France. It is one of the most populous cities in Europe, with a population of over 2 million people within the city proper and more than 12 million in the metropolitan area.</p>
        <p>Paris has a rich history dating back over 2,000 years, known for its historical landmarks like the Eiffel Tower, Notre-Dame Cathedral, and the Louvre Museum, one of the world's most famous art museums.</p>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>