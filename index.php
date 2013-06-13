<!DOCTYPE html>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>

    
    <div id="content">
      <script type="text/javascript" src="js/prototype.js"></script>
      <script type="text/javascript" src="js/scriptaculous.js"></script>
      <style>
        body { background:  #000;}
        #puzzle { width:450px; height:  450px; position: absolute; top: 50%; left: 50%; margin: -225px 0 0 -225px;}
        #puzzle img { display: block; float: left;}
        .congrats { color: #fff; background: #000 }
        #rock {  }
      </style>

      <div id="puzzle" style="width: 450px"><img id="image_1" src="img/puzzle1.png" alt="" style="position: relative; "><img id="image_5" src="img/puzzle5.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_7" src="img/puzzle7.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_9" src="img/puzzle9.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_8" src="img/puzzle8.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_4" src="img/puzzle4.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_2" src="img/puzzle2.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_6" src="img/puzzle6.png" alt="" style="position: relative; z-index: 0; left: 0px; top: 0px; " width="150"><img id="image_3" src="img/puzzle3.png" alt="" style="position: relative; "></div>
      <p><span id="puzzleinfo">(no move made yet)</span></p>

      <form name="cavara" id="prosperi" method="post" action="jacopetti" style="display: none">
         <label>Your email:</label><input type="text" name="bettino_ducksoleaney" id="bettino_ducksoleaney" />
         <input type="submit" name="aldo_filter" id="aldo_filter"″ value="i will learn to be patient" />
      </form>
      </div>
<script type="text/javascript">
(function(){ 
  var p = $('puzzle'), info = $('puzzleinfo'), moves = 0;
  
  Sortable.create('puzzle', {
    tag:'img',overlap:'horizontal',constraint: false,
    onUpdate:function(){
      info.update('You\'ve made ' + (++moves) + ' move' + (moves>1 ? 's' : ''));
      if(Sortable.sequence('puzzle').join('')=='123456789')
        $('rock').toggle();
    }
  });
})();
</script>

</body></html>