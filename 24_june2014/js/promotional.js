// pass promotional code, order id to this function
function validatePromotional(pcode, id, total_price) 
{    
	jQuery("#err").html("");
	//window.clearTimeout(timer);
	if(pcode.length) 
    {
		if(pcode.length > "15") 
        {
			jQuery("#err").html("Invalid code.").show();
		}
        else 
        {
			jQuery.ajax({
				type: "POST",
				data: { code: pcode, logowebid: id, netprice: total_price},
				url: $('#base_url').val()+'promotional',
				beforeSend: function() {
					jQuery("#err").html("Please wait...");
				},
				success: function(msg) {
					jQuery("#err").show();
                    					
					if(msg) {
						var myObject = eval('(' + msg + ')');
                        //jQuery("#subtotal").html(myObject.subtotaldisc);
                        //jQuery("#sub_total").val(myObject.subtotalamount);
                        jQuery("#discount").html(myObject.discountdisc);
                        jQuery("#p_discount").val(myObject.discountamount);
                         jQuery("#total_before_tax").html(myObject.totalBeforeTaxDisc);
                        //jQuery("#p_discount").val(myObject.totalBeforeTax);                       
                        jQuery("#taxamount").html(myObject.taxamount);
                        jQuery("#taxintotal").val(myObject.taxamount);
						jQuery('#LblYouPay').val(myObject.newtotal);
						jQuery('#LblYouPayTxt').text(myObject.newtotal);
                        jQuery('#net_total').val(myObject.newtotal);
                        jQuery('#pcid').val(myObject.pcid);
                        
                        						
						jQuery("#promotional").css("display","none");
                        jQuery("#basketbg").show();
                        jQuery("#success").show();
						jQuery("#success").html("Please Checkout Your Order With New Price!!<br /> Thank You!");
					} else {
						jQuery("#err").html('Please Check Your Code Again :)');
					}
					//alert(myObject.main_price);
				},
				error: function(msg) {
					jQuery("#err").html(msg);
				}
			});
		  }
		
	}
    else 
    {
        jQuery("#err").html("Enter a promotional code.");
    }
	//timer = setTimeout("jQuery('#err').fadeOut('slow')",7000);
}