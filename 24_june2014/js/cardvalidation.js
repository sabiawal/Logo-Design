	var nVisaCardType 				= 0;
	var nMastercardCardType 		= 1;
	var nDiscoverCardType			= 2;
	var nAmexCardType				= 3;
	var nDinersClubCardType			= 4;
	var nCarteBlancheCardType		= 5;
	var nEnRouteCardType			= 6;
	var nJCBCardType				= 7;
	var nUnknownCardType			= 8;
	var cardPics = new Array();

	cardPics[nVisaCardType] = new Image();
	cardPics[nVisaCardType].src="../jetpay/images/cards/visa.jpg";
	cardPics[nMastercardCardType] = new Image();
	cardPics[nMastercardCardType].src="../jetpay/validation/cards/mastercard.jpg";
	cardPics[nDiscoverCardType] = new Image();
	cardPics[nDiscoverCardType].src="../jetpay/images/cards/discover.jpg";
	cardPics[nAmexCardType] = new Image();
	cardPics[nAmexCardType].src="../jetpay/images/cards/amex.jpg";
	cardPics[nDinersClubCardType] = new Image();
	cardPics[nDinersClubCardType].src="../jetpay/images/cards/dinersclub.jpg";
	cardPics[nCarteBlancheCardType] = new Image();
	cardPics[nCarteBlancheCardType].src="../jetpay/images/cards/carteblanche.jpg";
	cardPics[nEnRouteCardType] = new Image();
	cardPics[nEnRouteCardType].src="../jetpay/images/cards/enroute.jpg";
	cardPics[nJCBCardType] = new Image();
	cardPics[nJCBCardType].src="../jetpay/images/cards/jcb.jpg";
	cardPics[nUnknownCardType] = new Image();
	cardPics[nUnknownCardType].src="../jetpay/images/cards/invalid.gif";

	//
	// Algorithm to verify a credit number is valid
	//
	function checkLuhn10(number) {
  	  if (number.length > 19)
    	    return (false);

  	  sum = 0; mul = 1; l = number.length;
  	  for (i = 0; i < l; i++) {
    	    digit = number.substring(l-i-1,l-i);
	    tproduct = parseInt(digit ,10)*mul;
	    if (tproduct >= 10)
	      sum += (tproduct % 10) + 1;
	    else
	      sum += tproduct;
	    if (mul == 1)
	      mul++;
	    else
	      mul--;
	  }

	  if ((sum % 10) == 0)
	    return (true);
	  else
	    return (false);
	}

	//
	// Determine the credit card type from the credit card number
	//
	function getCardType(number) {
		var numLength = number.length;

		if(numLength > 4)
		{
			if((number.charAt(0) == '4') && ((numLength == 13)||(numLength==16)))
				return(cardPics[nVisaCardType].src);
			else if((number.charAt(0) == '5' && ((number.charAt(1) >= '1') && (number.charAt(1) <= '5'))) && (numLength==16))
				return(cardPics[nMastercardCardType].src);
			else if(number.substring(0,4) == "6011" && (numLength==16))
				return(cardPics[nDiscoverCardType].src);
			else if((number.charAt(0) == '3' && ((number.charAt(1) == '4') || (number.charAt(1) == '7'))) && (numLength==15))
				return(cardPics[nAmexCardType].src);
			else if((number.charAt(0) == '3') && (numLength==16))
				return(cardPics[nJCBCardType].src);
			else if(((number.substring(0, 4) == "2131") || (number.substring(0, 4) == "1800")) && (numLength==15))
				return(cardPics[nJCBCardType].src);
			else if(((number.substring(0, 4) == "2014") || (number.substring(0, 4) == "2149")) && (numLength==15))
				return(cardPics[nEnRouteCardType].src);
			else if((number.charAt(0) == '3') && (number.charAt(1) == '8') && (numLength == 14))
				return(cardPics[nCarteBlancheCardType].src);
			else if((number.charAt(0) == '3') && (((number.charAt(1) == '0') && ((number.charAt(2) >= '0') && (number.charAt(2) <= '5')))
				|| (number.charAt(1) == '6')) && (numLength == 14))
				return(cardPics[nDinersClubCardType].src);

	    }

	    return(cardPics[nUnknownCardType].src);
	}


	function handleCCTyping (field, event) {	   
		var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;

      if (field.cardnum.value.length >= 13)
      {
      	if(!checkLuhn10(field.cardnum.value))
			{
				field.cardimage.src=cardPics[nUnknownCardType].src;
			}
			else
			{
				field.cardimage.src=getCardType(field.cardnum.value);
			}
		} else {
			field.cardimage.src=cardPics[nUnknownCardType].src;
		}

		return true;
	}


