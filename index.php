<?php 

    include "database.php"; 

    // Creating select query
    $query = "SELECT * FROM messages ORDER BY id ASC";
    $messages = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Basement</title>
        
        <!-- Linking CSS files -->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="resources/css/creative.css">
        
        <!-- Linking JS files -->
        <script type="text/javascript" src="vendors/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="resources/js/creative.js"></script>
    </head>
    
    <body>
        <div class="container">
            <header>
                <h1>The Basement</h1>
            </header>
            
            <section id="section-messages">
                <ul>
                    <?php while ($row = mysqli_fetch_assoc($messages)) : ?>
                    <li><?php echo $row['name']; ?> (<?php echo $row['date']; ?>): <?php echo $row['message']?></li>
                    <?php endwhile; ?>
                </ul>
            </section>
            
            <footer>
                <form>
                    <label>Name: </label>
                    <input type="text" id="name">
                    <div class="message-box">
                        <label class="last">Message: </label>
                        <input type="text" id="message">
                    </div>
                    <input type="submit" id="submit" value="Send">
                </form>
            </footer>
        </div>
    </body>
</html>