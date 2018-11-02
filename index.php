

<html>
<title>Reflow Calendar</title>
<head>
<?php include 'assets/includes/getQueryStringVals.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/4.0.1/moment-range.js"></script>
    <script src="assets/js/dateProcessing.js"></script>
    <script src=""></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1 style="font-family: sans-serif; margin-top:25px;">Reflow Calendar</h1>
            <p style="font-size:18px;">
                A fast calendar generator for visual people.

            <li>Visualize your vacation time</li>
            <li>Make a trip timeline with a friend</li>
            <li>Make a 30 day Reflow and pick up a new habit</li>
            <li>Make a custom habit chain template</li>
            <li>Coming soon: URL generation for sharing calendars, presets for common layouts, and more.</li>
            </p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Start Date</span>
                </div>
                <input type="date" name="fromdate" class="form-control" id="fromdate" value="2018-11-02"
                       aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">End Date</span>
                </div>
                <input type="date" name="todate" class="form-control" id="todate" value="2018-11-19"
                       aria-describedby="basic-addon2"></div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3" data-toggle="tooltip" data-placement="top"
                          title="eg. 150px or 5%"><span class="tooltipMarker">Box Width</span></span>
                </div>
                <input class="form-control" type="text" id="boxWidth" value="5%" aria-describedby="basic-addon3"></div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon4" data-toggle="tooltip" data-placement="top"
                          title="Hint: Try smaller font sizes if you experience uneven box layouts"><span
                                class="tooltipMarker">Font Size</span>
                </div>
                <input class="form-control" type="text" id="boxFontSize" value="18" aria-describedby="basic-addon4">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon5" data-toggle="tooltip" data-placement="top"
                          title="The amount of blank space left for notes. eg. 50"><span class="tooltipMarker">Scratch Height</span>
                </div>
                <input class="form-control" type="text" id="scratchHeight" value="40" aria-describedby="basic-addon5">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button" id="button-addon2" onclick="toggleScratch();">
                        On/Off
                    </button>
                </div>
            </div>
            <input class="btn btn-primary" type="button" onclick="getData();" value="Submit"><br>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div id="myResults"></div>
            <div id="resultStatsBox">
                Total Days</br>
                --------------
                <div id="resultStats"></div>
            </div>
        </div>
    </div>
</div>
</body>
<div class="footer">
    <p>Reflow Calendar &copy; 2018 by <a href="http://bradleyf.com">Bradley Ferreira</a></p>
</div>
<script>

    //js querystring handling
    var to = "<?php echo $to ?>";
    var from = "<?php echo $from ?>";
    var width = "<?php echo $width ?>";
    var fontSize = "<?php echo $fontSize ?>";
    var scratchHeight = "<?php echo $scratchHeight ?>";

    if (from !== "1900-01-01") {
        $('input[name=fromdate]').val(from);
    }
    if (to !== "1900-01-01") {
        $('input[name=todate]').val(to);
    }
    if (width !== "0") {
        $("#boxWidth").val(width);
    }
    if (fontSize !== "0") {
        $("#boxFontSize").val(fontSize);
    }
    if (scratchHeight !== "0") {
        $("#scratchHeight").val(scratchHeight);
    }
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
</script>
</html>
