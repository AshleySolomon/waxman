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
        <?php include ("nav-others.php");?>
        <div id="breadcrumbs">
            COLUMNS
        </div>

        <!--The Layer that will be layed over the content
        so that the content is unclickable while menu is shown-->
        <div id="contentLayer"></div>

        <main>
            <a href="natural_candles.html">
                <div class="column" id="deep_forest"> 
                    <div class="title">
                        <p>DEEP FOREST</p>
                        <p>$13.00-$56.00</p>
                    </div>
                </div>
            </a>

            <a href="layers_candles.php">
                <div class="column right" id="fifth_ave">
                    <div class="title">
                        <p>FIFTH AVE.</p>
                        <p>$13.00-$56.00</p>
                    </div>                
                </div>
            </a>

            <a href="spiritual_candles.html">
                <div class="column" id="fengshui">
                    <div class="title">
                        <p>FENG SHUI</p>
                        <p>$13.00-$56.00</p>
                    </div>
                </div>
            </a>

            <a href="signature_column_candles.html">
                <div class="column right" id="kansas">
                    <div class="title">
                        <p>KANSAS</p>
                        <p>$11.00-$24.00</p>
                    </div>
                </div>
            </a>

            <a href="signature_column_candles.html">
                <div class="column right" id="kitchen">
                    <div class="title">
                        <p>KITCHEN</p>
                        <p>$13.00-$56.00</p>
                    </div>
                </div>
            </a>

            <a href="natural_candles.html">
                <div class="column" id="sunshine"> 
                    <div class="title">
                        <p>SUNSHINE</p>
                        <p>$13.00-$56.00</p>
                    </div>
                </div>
            </a>

            <a href="natural_candles.html">
                <div class="column" id="water"> 
                    <div class="title">
                        <p>WATER</p>
                        <p>$13.00-$56.00</p>
                    </div>
                </div>
            </a>
        </main>

        <?php include ("footer.php"); ?>
    </div>
</body>
</html>

