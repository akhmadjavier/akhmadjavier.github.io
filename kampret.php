<!DOCTYPE html>
<html lang="en">
 
<head><title>Paypal Valid checker</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://www.w32.info/1999/xhtml">
  <style>
         @import "http://fonts.googleapis.com/css?family=Play:400,700";
         body {
         background: #000000;
         line-height: 1;
         color: #bbb;
         font-family: "CONSOLAS";
         font-size: 12px;
         background-size: cover;
                                    -webkit-background-size: cover;
                                    -moz-background-size: cover;
                                    -o-background-size: cover;
         }
         textarea, input, select {
                                border:0;
                                BORDER-COLLAPSE:collapse;
                                border:double 2px #696969;
                                color:#fff;
                                background-color: rgba(0, 0, 0, 0.4);
                                margin:0;
                                padding:2px 4px;
                                font-family: Lucida Console,Tahoma;
                                font-size:12px;
                                box-shadow: 0 0 15px gray;
                                -webkit-box-shadow: 0 0 15px gray;
                                -moz-box-shadow: 0 0 15px red;

         }
         .title {
         color: #eee;
         background: black;
         text-align: center;
         font-size: 120%;
         }
         .button {
         color: #eee;
         }
         .tool {
         color: lime;
         }
         header {
         font-family: Lucida Console;
         font-size: 12px;
         text-align: center;
         padding-top: 10px;
         color: #626262;
         }
         /* Gradient 1 */
         .ta10 {
         background: url();
         background-color: aqua marine;
         background-repeat: no-repeat;
         background-size: 52% 100%;
         background-position: center;
         border: 2px double #696969;
         padding: 3px;
         margin-right: 4px;
         margin-bottom: 8px;
         font-family: Lucida Console, Tahoma;
         font-size: 12px;
         box-shadow: 0 0 5px white;
         -webkit-box-shadow: 0 0 5px white;
         -moz-box-shadow: 0 0 5px white;
         border: solid 0px transparent; // or border: none;
         }
         .char {
         transition: all 5s;
         -webkit-transition: all 1s;
         opacity: 0.8;
         }
         .char:hover {
         transition: all 0.1s;
         -webkit-transition: all 0.1s;
         opacity: 1.5;
         text-shadow: 0 0 1em white;
         }
         .chara:not(.space):hover {
         transform: rotateY(1440deg);
         -webkit-transform: rotateY(1440deg);
         }
         .chara:not(.space) {
         display: inline-block;
         transition: transform 2s ease-out;
         -webkit-transition: -webkit-transform 2s ease-out;
         }
      </style>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>
String.prototype.contains = function(it)
{
   return this.indexOf(it) != -1;
};
$(document).ajaxStop(function() {
    alert("Checked Finished!");
    $("#cok").text($("#ok").find('br').length);
    $("#cbad").text($("#bad").find('br').length);
});
$(document).ready(function(){
    var st;
    $("#start").click(function(){
        $("#ok").text("");
        $("#bad").text("");
        var em = $("#pop").val().split("\n");
        var i = 0;
        for (i = 0; i < em.length; i++){
           if(em[i] != ""){
               st = $.post("function.php",{
                        ue: em[i]
                    },function(data){
                        if(data.search("color=Blue") >= 0){
                            if(i == 0){
                                $("#bad").text(data+"<br>");
                            }else{
                                $("#bad").append(data+"<br>");
                            }
                        }else{
                            if(i == 0){
                                $("#ok").text(data+"<br>");
                            }else{
                                $("#ok").append(data+"<br>");
                            }
                       }
                     $("#counter").text(i);
               });
           }
        }
    });
    $("#stop").click(function(){
	var em = $("#pop").val().split("\n");
        var i = 0;
    	for (i = 0; i < em.length; i++){
    		st.abort();
    	}
    });
});
</script>
<script type="text/javascript">
         function bukanemailpaypal(str) {
             document.getElementById('listbukanemailpaypal').innerHTML += str + '\n';
         }
		 $(document).ready(function() {
             $('#improved .head').click(function(e) {
                 e.preventDefault();
                 $(this).closest('dt').find('.content').not(':animated').slideToggle();
             });
         });
</script>
</head>
<body>
<div align="center" class="form-container"> 
		<font color="#FF4500"> <font size="5"># Paypal Valid Checker #</font></font><p>&nbsp;</div>
<div align="center" class="form-container">./Javers-Crew</div>
				<div class='content' style="display:none;">
		<div style="border: 1px blue ridge;-moz-box-shadow: inset 0px 0px 8px 1px aqua;-webkit-box-shadow: inset 0px 0px 8px 1px aqua;width: 695px;opacity: 0.85;
background-color: rgba(75, 75, 225, 0.1);">
<div style="color:#dfdedc;margin-top: 3px;"></div><hr style="margin-top: 1px;margin-bottom: 2px;">

		</div>
		</div>
        </dt>
        </center>
                </header>
</div>
   <header>
      <div>
        <br>
<center><textarea id=pop name='val' cols=10 rows=20 style='width:50%;'></textarea><br>
<button id=start value="WOOT">Check</button>
</p><k1>-=-=-=- Paypal Email -=-=-=-</k1>
<br>

<table style="width: 1024px;">
         <tr>
            <td style="width: 1024px;">
               <div style="overflow:auto; width:1024px; height: 350px; font-size: 11px; color:gainsboro">
                  <br /><br />
                  <font color="white"><br><br /><span id="ok" style="overflow-y:auto; width:500px; font-size: 11px;"></span></font>
                  <br />
			 </div>
             </td>
         </tr>
</table>
<hr />
<b>Total Live:<span id=cok ></span></b>
</center>
<p>&nbsp;</p>
</body>
