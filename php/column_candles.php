<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include ("head.php"); ?>

<body>
<?php include ("header-others.php"); ?>

    <!--This wrapping container is used to get the width of the whole content-->
    <div id="container">
        <!--The mobile navigation Markup hidden via css-->
        <?php include ("nav-others.php"); ?>
        <div id="breadcrumbs">
            COLUMNS
        </div>

        <!--The Layer that will be layed over the content
        so that the content is unclickable while menu is shown-->
        <div id="contentLayer"></div>

        <main>
            <a href="environmental_candles.html">
                <div class="column" id="environmental"> 
                    <div class="title">
                        <p>NATURAL</p>
                    </div>
                </div>
            </a>

            <a href="layers_candles.html">
                <div class="column right" id="layers">
                    <div class="title">
                        <p>LAYERS</p>
                    </div>                
                </div>
            </a>

            <a href="spiritual_candles.html">
                <div class="column" id="spiritual">
                    <div class="title">
                        <p>SPIRITUAL</p>
                    </div>
                </div>
            </a>

            <a href="signature_column_candles.html">
                <div class="column right" id="signature">
                    <div class="title">
                        <p>SIGNATURE</p>
                    </div>
                </div>
            </a>

            <a href="all_column_candles.html">
                <div class="column" id="all_columns">
                    <div class="title">
                        <p>ALL COLUMNS</p>
                    </div>
                </div>
            </a>           
        </main>

        <?php include ("footer.php"); ?>
    </div>
</body>
</html>

