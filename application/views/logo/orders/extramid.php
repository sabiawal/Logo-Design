<?php if (SITE_ID == 7): ?>
<style>
#form1{display: none;}
</style>
<form id="form1" name="form1" class="wufoo rightLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://ldg1.wufoo.com/forms/z1auuia10x4d6n9/">
    <ul>
    
        <li id="foli1" class="notranslate      ">
            <label class="desc" id="title1" for="Field1">Name<span id="req_1" class="req">*</span></label>
            <span>
                <input id="Field1" name="Field1" type="text" class="field text fn" value="<?php echo @$_SESSION['fname']; ?>" size="8" tabindex="1" required />
                <label for="Field1">First</label>
            </span>
            <span>
                <input id="Field2" name="Field2" type="text" class="field text ln" value="<?php echo @$_SESSION['lname']; ?>" size="14" tabindex="2" required />
                <label for="Field2">Last</label>
            </span>
        </li>
        <li id="foli3" class="notranslate      ">
            <label class="desc" id="title3" for="Field3">Email<span id="req_3" class="req">*</span></label>
            <div>
                <input id="Field3" name="Field3" type="email" spellcheck="false" class="field text medium" value="<?php echo@$_SESSION['email_id']; ?>" maxlength="255" tabindex="3" required /> 
            </div>
        </li>
        
        <li class="buttons ">
            <div><input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit"  /></div>
        </li>
        
        <li class="hide">
            <label for="comment">Do Not Fill This Out</label>
            <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
            <input type="hidden" id="idstamp" name="idstamp" value="Sds4KPWnL5rp19V/Jm69nLGeym6zVOg7AGXKhw6RMdE=" />
        </li>
    </ul>
</form> 

<script language="javascript">
document.form1.submit();
</script>
<?php else: ?>
<?php redirect('orders/extra1'); ?>

<?php endif; ?>