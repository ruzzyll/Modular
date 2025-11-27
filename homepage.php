<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Template</title>
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

        /* Style the header */
        header {
            background-color: #666;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: white;
        }

        /* Use flexbox to structure the layout */
        section {
            display: flex;
            flex-wrap: wrap;
            margin: 20px;
        }

        /* Navigation styles */
        nav {
            flex: 1 1 30%; /* Flexbox shorthand for width and growth */
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

        /* Article styles */
        article {
            flex: 2 1 60%; /* Flexbox shorthand for width and growth */
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

        /* Footer styles */
        footer {
            background-color: #777;
            padding: 10px;
            text-align: center;
            color: white;
            margin-top: 20px;
        }

        /* Responsive layout */
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
    <h2>Cities</h2>
</header>

<section>
    <nav>
        <ul>
            <li><a href="./modules/london.php">London</a></li>
            <li><a href="./modules/paris.php">Paris</a></li>
            <li><a href="./modules/tokyo.php">Tokyo</a></li>
        </ul>
    </nav>

    <article>
        <h1>London</h1>
        <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
        <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
    </article>
</section>

<footer>
    <p>Footer</p>
</footer>

</body>
</html>