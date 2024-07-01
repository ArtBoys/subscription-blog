<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <input type="checkbox" id="toggle">
    <label for="toggle" class="show-btn">Show Modal</label>
    <div class="wrapper">
        <label for="toggle" class="cancel-btn"><i class="fas fa-times"></i></label>
        <div class="icon"><i class="far fa-envelope">Show Modal</i></div>
        <div class="content">
            <header>Become a Subscriber</header>
            <p>Subscribe to our and get the lastes updates straight to your inbox</p>
        </div>
        <form action="index.php" method="POST">
             <?php
                $userEmail = "";
                if(isset($_POST['subscribe'])) {
                    $userEmail = $_POST['email'];
                    if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                        $subject = "Thank for Subscribing us";
                        $message = "Thank for Subscribing to out blog. We'll always receive latest updates from us.";
                        $sender = "From: SuperBlog@gmail.com";
                        if(mail($userEmail, $subject, $message, $sender)) {
                            ?>
                            <div class="alert success">Thank for Subscribing us.</div>
                            <?php
                            $userEmail = "";
                        } else {
                            ?>
                            <div class="alert error">Failed while sending your email</div>
                            <?php
                            $userEmail = "";
                        }
                    } else {
                        ?>
                            <div class="alert eroror"><?php echo $userEmail ?> is not a valid Email</div>
                        <?php
                    }
                }
             ?>
            <div class="field">
                <input type="text" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
            </div>
            <div class="field btn">
                <input type="submit" name="subscribe" value="Subscribe">
            </div>
        </form>
        <div class="text">We do not share your information</div>
    </div>
    
</body>
</html>