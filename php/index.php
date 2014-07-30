<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php include ("head.php"); ?>

<body>
    <?php include ("header.php"); ?>

    <!--This wrapping container is used to get the width of the whole content-->
    <div id="container">
        <?php include ("nav-home.php"); ?>

        <!--The Layer that will be layed over the content
        so that the content is unclickable while menu is shown-->
        <div id="contentLayer"></div>

        <main>
            <a href="container_candles">
                <div class="column" id="container">
                    <div class="title">
                        <p>CONTAINER</p>
                        <p>CANDLES</p>
                    </div>
                </div>
            </a>

            <a href="column_candles.php">
                <div class="column right" id="columns">
                    <div class="title">
                        <p>COLUMN</p>
                        <p>CANDLES</p>
                    </div>                
                </div>
            </a>

            <a href="novelty_candles">
                <div class="column" id="novelty">
                    <div class="title">
                        <p>NOVELTY</p>
                        <p>CANDLES</p>
                    </div>
                </div>
            </a>

            <a href="taper_candles">
                <div class="column right" id="taper">
                    <div class="title">
                        <p>TAPER</p>
                        <p>CANDLES</p>
                    </div>
                </div>
            </a>

            <a href="votive_candles">
                <div class="column" id="votive">
                    <div class="title">
                        <p>VOTIVE</p>
                        <p>CANDLES</p>
                    </div>
                </div>
            </a>

            <a href="diffuser_supplies">
                <div class="column right" id="diffuser">
                    <div class="title">
                        <p>DIFFUSER</p>
                        <p>SUPPLIES</p>
                    </div>
                </div>
            </a>            
        </main>

        <?php include ("footer.php"); ?>
    </div>
</body>
</html>

