<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <form action="#">
            <div class="field">
                <input type="text" placeholder="Email Address" required>
            </div>
            <div class="field btn">
                <input type="submit" value="Subscribe">
            </div>
        </form>
        <div class="text">We do not share your information</div>
    </div>
    
</body>
</html>