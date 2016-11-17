<style>
    .navbar{
        background-color: saddlebrown;
    }
    a{
        color: #000;
    }
    a:hover{
        background-color: yellow;
    }

</style>

<?php require_once("head-utils.php");?>

<nav class="navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Caffeinated Ape</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="menu.php">Menu</a></li>
                <li><a href="officialStuff.php">Official Papers</a></li>
                <li><a href="introduction.php">Bio of Place</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
