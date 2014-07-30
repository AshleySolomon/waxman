<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Waxman Candles</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/waxman_all.css">
    <link rel="stylesheet" href="../css/font-awesome-4.1.0/css/font-awesome.css">


    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="../js/hamburger.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Economica|Poiret+One|Paytone+One|Shadows+Into+Light|Walter+Turncoat|Oxygen|Inconsolata|Shadows+Into+Light+Two|Amatic+SC|Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    <script>
    $(function() {        
        var icons={
            header: "fa fa-plus",
            activeHeader: "fa fa-minus"
        };

        $("#nav-menu").accordion({
            icons: icons,
            heightStyle: "content",
            active: false,
            collapsible: true
        });
        $("toggle").button().toggle(function(){
            $("#nav-menu").accordion("option", "icon", false);
        }, function(){
            $("#nav-menu").accordion("option", "icon", icon);
        });
    });

    $(function() {        
        var icons={
            header: "fa fa-plus",
            activeHeader: "fa fa-minus"
        };

        $( "#filters-menu" ).accordion({
            icons: icons,
            heightStyle: "content",
            active: false,
            collapsible: true
        });
        $("toggle").button().toggle(function(){
            $("#filters-menu").accordion("option", "icon", false);
        }, function(){
            $("#filters-menu").accordion("option", "icon", icon);
        });
    });
    </script>
</head>