<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Scripts</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Welcome!</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="serverdt.php">Get Current Date and Time</a></li>
            <li><a href="lastvisit.php">Track Last Visit</a></li>
            <li><a href="processrequest.html">Capture Request Parameters</a></li>
            <li><a href="readsession.php">Read Session Variables</a></li>
        </ul>
    </nav>


    <!-- Custom Error Page -->
    <div id="error-page" style="display: none;">
        <h2>Oops! Something went wrong with the website.</h2>
        <p>We apologize for the inconvenience. Please try again later.</p>
    </div>

    <script>
        //to redirect to custom error page if an error occurs
        window.onerror = function(message, source, lineno, colno, error) {
            document.body.innerHTML = ''; //Clear the body
            document.body.appendChild(document.getElementById('error-page')); //Display the custom error page
            console.error(message, source, lineno, colno, error); //Log the error to know what the issue is
            return true;
        };
    </script>
</body>
</html>
