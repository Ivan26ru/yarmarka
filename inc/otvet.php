<?
global $_REQUEST;
?>
<div id="otvet_server"><?=$_REQUEST['strIMessage']?></div>
<style type="text/css">
#otvet_server{
    background: #00a4e8;
    color: #ffffff;
    display: block;
    font-size: 18px;
    font-weight: bold;
    line-height: 20px;
    position: fixed;
    text-align: center;
    top: 50px;
	left: 50%;
	margin-left: -300px;
    width: 600px;
    z-index: 2005;
	box-sizing: border-box;
		-moz-box-sizing: border-box; /*Firefox 1-3*/
		-webkit-box-sizing: border-box; /* Safari */
		padding: 15px 20px;
		border-radius: 7px;
	-moz-border-radius: 7px; 
	-webkit-border-radius: 7px; 
	-khtml-border-radius: 7px;
	box-shadow: 5px 5px 10px gray;
	-webkit-box-shadow: 5px 5px 10px gray;
	-moz-box-shadow: 5px 5px 10px gray;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$("#ekran_block").show();
$("#otvet_server").show();
setTimeout("close_otvet()",2000);
});
function close_otvet(){
$("#otvet_server").fadeOut(2000);
setTimeout("$('#ekran_block').hide();",2200);
}
</script>