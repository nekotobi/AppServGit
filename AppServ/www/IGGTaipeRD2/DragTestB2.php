
<script type="text/javascript">
	function AllowDrop(event) {
		event.preventDefault();
	}

	function Drag(event) {
		event.dataTransfer.setData("text", event.currentTarget.id);
	}

	function Drop(event) {
		event.preventDefault();
		var data = event.dataTransfer.getData("text");
		event.currentTarget.appendChild(document.getElementById(data));
	}
}
</script>

<script language="JavaScript1.2">
document.captureEvents(Event.MOUSEMOVE)
document.onmousemove = getMouseXY;
var tempX = 0
var tempY = 0
function getMouseXY(e) {
    tempX = e.pageX
    tempY = e.pageY
  document.Show.MouseX.value = tempX
  document.Show.MouseY.value = tempY
  return true
}
</script>
<style type="text/css">
	    #Box1,#Box2,#Box3 {
		width: 200px;
		height: 100px;
		padding: 10px;
		border: 1px #ccc dashed;
		float: left;
		margin-right: 10px;
	}
</style>
<form name="Show">
<p align="center"><input type="text" name="MouseX" value="0" size="4">X2 <input type="text" name="MouseY" value="0" size="4">Y </form>    
<?php
       //include('PubApi.php');
 
	   // DrawDragbox(20,20,50,50,"#eea123","box1");
		//Drawrect();
		function Drawrect(){
				for ($i=1;$i<=20;$i++){
			      $x=$i*55;
		      	$id="ar".$i;
		          DrawDragArea($x,100,50,50,"#2ea123", $id);
		}
		}
	
		echo "<div id='Box2' ondrop='Drop(event)' ondragover='AllowDrop(event)'></div>";
 	    echo " <img id='img1' src='Pics\Edit.png' draggable='true' ondragstart='Drag(event)'>";
		echo "<div style='clear:both;'></div>";

		 
		 
	   function DrawDragbox($x,$y,$w,$h,$BgColor,$id){
	          echo "<div  id=".$id." ";
			  echo " draggable='true' ondragstart='Drag(event)' ";
              echo  " style='" ;
			  echo "position:absolute;  top:".$y."px; left:".$x."px;  width:".$w."px;height:".$h."px; background-color:".$BgColor."; '> ";
	          echo "</div>";
	   }
	   function DrawDragArea($x,$y,$w,$h,$BgColor,$id){
	          echo "<div  id=".$id." ";
			  echo " ondrop='Drop(event)' ondragover='AllowDrop(event)' ";
              echo  " style='" ;
			  echo "position:absolute;  top:".$y."px; left:".$x."px;  width:".$w."px;height:".$h."px; background-color:".$BgColor."; '> ";
	          echo "</div>";
	   }
  
 
	   
 




?>
