<?php include("config/scriptvars.php") ?>
<div style="text-align:left; font-family:Tahoma; font-size:13px;">
<div style="color:#000; font-size:13px; background-color:#FFF; border:1px #999 solid; margin-right:11px; margin-bottom:10px; margin-left:5px; padding:5px">
<b>STEP 1. </b>Insert the following code into your locked page section (between the &lt;head&gt; tags): <br /><br />
&lt;link rel="stylesheet" type="text/css" href="<?php echo "http://".$_SERVER['HTTP_HOST'].str_replace("/getcode.php","",$_SERVER['REQUEST_URI'])?>/stylesheets/font_styles.css"&gt; 
</div>


<div style="color:#000; font-size:13px; background-color:#FFF; border:1px #999 solid; margin-right:11px; margin-bottom:10px; margin-left:5px; padding:5px">
<b>STEP 2.</b> Insert the following code in your locked page (preferably right after the  &lt;body&gt; tag): <br /><br />

&lt;script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].str_replace("/getcode.php","",$_SERVER['REQUEST_URI'])?>/jscript/ajaxcalls.js"&gt;&lt;/script&gt;<br>

  &lt;div id="tell_fullscreen"&gt;<br>
  	&lt;div id="tell_content"&gt;<br>
   <?php echo htmlspecialchars($mainmessage); ?><br />
   &lt;a href="<?php echo "http://".$_SERVER['HTTP_HOST'].str_replace("/invitetounlock/getcode.php","",$_SERVER['REQUEST_URI'])?>/index.php"  target="_blank"&gt;&lt;img title="Super Tell A Friend" src="<?php echo "http://".$_SERVER['HTTP_HOST'].str_replace("/getcode.php","",$_SERVER['REQUEST_URI'])?>/images/tell.png" border="0" id="button_tell"&gt;&lt;/a&gt;
    <br>
    &lt;/div&gt;<br>
  &lt;/div&gt;<br>
  &lt;script type="text/javascript"&gt;get_visitor('<?php echo "http://".$_SERVER['HTTP_HOST'].str_replace("/getcode.php","",$_SERVER['REQUEST_URI'])  ?>/viewpage.php',document.title);&lt;/script&gt; <br>
</div>

</div>

