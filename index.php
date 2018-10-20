<?php
include 'database.php' ;
?>
    <?php 
$query = "SELECT * FROM shouts";
//$query = "SELECT * FROM shouts ORDER BY id DESC";  // To get new posts at top 
$shouts = mysqli_query($connection , $query);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>ShoutBox</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>

    <body>
        <div class="conatiner">
            <div class="jumbotron">
                <h1 class="display-3">Shout It - The Shout Box</h1>
                <p class="lead">This is a simple chat unit, a simple chatting room for strangers for chat with each other.</p>
                <hr class="my-4">
                <p class="lead">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseInfo" aria-expanded="false" aria-controls="collapseExample"> Learn More
</button>
                </p>
                <div class="collapse" id="collapseInfo">
                    <div class="card card-block">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                    </div>
                </div>
            </div>
        </div>
        <div id="container">
            <div class="shouts">
                <ul class="list-group">

                    <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class="list-group-item shout"><span><?php echo $row['time']?> - </span>
                        <?php echo $row['username']?> :
                        <?php echo $row['message']?>
                    </li>
                    <?php  endwhile; ?>
                </ul>
            </div>
        </div>
        <div id="form">
            <br />
            <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <strong>Sorry</strong>
                <?php echo $_GET['error'] ?>
            </div>
            <?php endif ?>
            <form method="post" action="process.php">
                <div class="input-group">
                    <input type="text" class="form-control" name="username" placeholder="Enter Your Name" aria-describedby="basic-addon1" />
                    <input class="form-control form-control-lg-4" type="text" name="message" placeholder="Enter A Message">
                </div>
                <br />
                <input type="submit" class="btn btn-success" name="submit" value="SHOUT !">
            </form>

        </div>


        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>

    </html>
