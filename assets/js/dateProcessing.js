


var rangeDiff;
function getData()
{
    window['moment-range'].extendMoment(moment);
    var start=moment(jQuery("#fromdate").val());
    var end=moment(jQuery("#todate").val());
    const r1 = moment.range(start, end);
    rangeDiff = end.diff(start, 'days')+1;
    myDatesObject = Array.from(r1.by('days')).map(m => m.format('DD ddd')); //add ddd for mon, tue, etc.
console.log(myDatesObject);
    jQuery.post("getDateRange.php",{myDatesObject:myDatesObject},function(reply){
        processResults(reply);
    },"text");
}

function processResults(res)
{
    $("#myResults").html(res);
    $("#resultStats").html(rangeDiff);
    $("#resultStatsBox").show();
    setBoxWidth();
    setBoxFontSize();
    setBoxDividerScratchHeight();
}

function setBoxWidth(){
    var myWidth = $("#boxWidth").val();
    $(".dateBox").css("width",myWidth);
}

function setBoxFontSize(){
    var myBoxFontSize = $("#boxFontSize").val();
    $(".dateBox").css("font-size",myBoxFontSize);
}

function setBoxDividerScratchHeight(){
    var myBoxDividerScratchHeight = $("#scratchHeight").val();
    $(".boxDivider").css("margin-bottom",myBoxDividerScratchHeight);
}

function toggleScratch(){
    $(".boxDivider").toggle();
}
