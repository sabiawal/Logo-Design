 function SelectAll_2(strProduct,strCost,id,productid)
        {
			var ida=id+'a';
			
		if(id=='opta20')
		{	
		
					
			if(strCost==tshirt_with_logo)
			{
			
			document.getElementById('opt20').value=tshirt_with_logo;
			document.getElementById('optt20').style.display="none";
			document.getElementById('optdel20').style.display="";
			document.getElementById('optdel20').checked="checked";
			document.getElementById('optdela20').style.display="none";
			document.getElementById('tick20').innerHTML='<img src="'+baseUrl+'/images/basket-image/correct.gif"/>';
			document.getElementById('extraopt20').value='Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!' + '(S * ' +(this.document.form1.select4.value)+ '),' + '(M * ' +(this.document.form1.select5.value)+ '),'+ '(L * ' +(this.document.form1.select6.value)+ '),'+ '(XL * ' +(this.document.form1.select7.value)+ '),'+ '(XXL * ' +(this.document.form1.select8.value)+ ')';
			strProduct='Order  a <u>T-shirt</u> with your personal logo on  (free delivery)!' + '(S * ' +(this.document.form1.select4.value)+ '),' + '(M * ' +(this.document.form1.select5.value)+ '),'+ '(L * ' +(this.document.form1.select6.value)+ '),'+ '(XL * ' +(this.document.form1.select7.value)+ '),'+ '(XXL * ' +(this.document.form1.select8.value)+ ')';
			
			
			}
			
			
			if(strCost=='0.00')
			{
				
				document.getElementById('opt20').value='';		
				document.getElementById('optdel20').style.display="none";
				document.getElementById('optdela20').style.display="";
				document.getElementById('tick20').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt20').value='';
				select22(ida);
				
			}
			
		 var cost=strCost;
		 strCost=eval(cost * (this.document.form1.select4.value)) + eval(cost * (this.document.form1.select5.value)) + eval(cost * (this.document.form1.select6.value)) + eval(cost * (this.document.form1.select7.value)) + eval(cost * (this.document.form1.select8.value));
		
			
		}		
		if(id=='opta16')
		{
			if(strCost==mouse_mat_with_logo)
			{
			document.getElementById('opt16').value=mouse_mat_with_logo;
			document.getElementById('optt16').style.display="none";
			document.getElementById('optdel16').style.display="";
			document.getElementById('optdel16').checked="checked";
			document.getElementById('optdela16').style.display="none";
			document.getElementById('tick16').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt16').value='Order a Mouse Mat with your personal logo on (free delivery)! (' + currency + mouse_mat_with_logo + ' * ' +  (this.document.form1.select.value)+')';
			strProduct='Order a Mouse Mat with your personal logo on (free delivery)! (' + currency + mouse_mat_with_logo + ' * ' +  (this.document.form1.select.value)+')';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel16').style.display="none";
				document.getElementById('opt16').value='';
				document.getElementById('optdela16').style.display="";
				document.getElementById('tick16').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt16').value='';
				select22(ida);
				
			}
			strCost= strCost * (this.document.form1.select.value);
			
			
			
		}
		if(id=='opta17')
		{
			var color= this.document.form1.select3.value;
			if(strCost==cap_with_logo)
			{
			document.getElementById('opt17').value=cap_with_logo;
			document.getElementById('optt17').style.display="none";
			document.getElementById('optdel17').style.display="";
			document.getElementById('optdel17').checked="checked";
			document.getElementById('optdela17').style.display="none";
			document.getElementById('tick17').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt17').value='Order a <u>custom CAP</u> with your personal logo on (free delivery)! (' + currency + cap_with_logo +' *' +  (this.document.form1.select2.value)+')' + color;
			
			strProduct='Order a <u>custom CAP</u> with your personal logo on (free delivery)! (' + currency + cap_with_logo +' *' +  (this.document.form1.select2.value)+')' + color;
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel17').style.display="none";
				document.getElementById('opt17').value='';
				document.getElementById('optdela17').style.display="";
				document.getElementById('tick17').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt17').value='';
				select22(ida);
				
			}
			
			strCost= strCost * (this.document.form1.select2.value);
			
			
			
		}
		if(id=='opta1')
		{
		if(id=='opta1' && strCost=='19')
		{
			if((document.getElementById('package').value=='Silver Logo Package') || (document.getElementById('package').value=='Silver Plus Logo Package') || (document.getElementById('package').value=='Super Silverplus Logo Package'))
			{
			 document.getElementById('logoconcept').innerHTML='<span class="correctfont">You currently have 3 designers assigned to your project. By adding this service you will have  12 designers working on your 12 logo concepts currently selected. This will massively increase the creativity and options for you. All services are backed by our 60-Day, 100% Money Back guarantee.</span>'
			 
			 }
			 if((document.getElementById('package').value=='Elite Logo Package') || (document.getElementById('package').value=='Elite Plus Logo Package') || (document.getElementById('package').value=='Super Eliteplus Logo Package'))
			{
			 document.getElementById('logoconcept').innerHTML='<span class="correctfont">You currently have 6 designers assigned to your project. By adding this service you will have 18     designers working on your 18 logo concepts. This will massively increase the creativity and options for you. All services are backed by our 60-Day, 100% Money Back guarantee.</span>'
			 
			 }
			 }
			 if(id=='opta1' && strCost=='0.00')
		{
			if((document.getElementById('package').value=='Silver Logo Package') || (document.getElementById('package').value=='Silver Plus Logo Package') || (document.getElementById('package').value=='Super Silverplus Logo_Package'))
			{
			 document.getElementById('logoconcept').innerHTML='<span class="correctfont">You currently have 3 designers assigned to your project. By adding this service you will have 6 designers working on your 6 logo concepts. This will massively increase the creativity and options for you.All services are backed by our 60-Day, 100% Money Back guarantee.</span>'
			 
			 }
			 if((document.getElementById('package').value=='Elite Logo Package') || (document.getElementById('package').value=='Elite Plus Logo Package') || (document.getElementById('package').value=='Super Eliteplus Logo Package'))
			{
			 document.getElementById('logoconcept').innerHTML='<span class="correctfont">You currently have 6 designers assigned to your project. By adding this service you will have 12 designers working on your 12 logo concepts. This will massively increase the creativity and options for you.All services are backed by our 60-Day, 100% Money Back guarantee.</span>'
			 
			 }
			}
			
			
			if(strCost==six_logo_concept)
			{
			document.getElementById('opt1').value=six_logo_concept;
			document.getElementById('optt1').style.display="none";
			document.getElementById('optdel1').style.display="";
			document.getElementById('optdel1').checked="checked";
			document.getElementById('optdela1').style.display="none";
			document.getElementById('tick1').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt1').value='Extra 6 Logo Concept';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel1').style.display="none";
				document.getElementById('opt1').value='';
				document.getElementById('optdela1').style.display="";
				document.getElementById('tick1').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt1').value='';
				select22(ida);
				
			}
			
		}	
		if(id=='opta2')
		{
		
		if(strCost==logo_by_different_designer)
			{
			document.getElementById('opt2').value=logo_by_different_designer;
			document.getElementById('optt2').style.display="none";
			document.getElementById('optdel2').style.display="";
			document.getElementById('optdel2').checked="checked";
			document.getElementById('optdela2').style.display="none";
			document.getElementById('tick2').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt2').value='Get logos created a by a different designer';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel2').style.display="none";
				document.getElementById('opt2').value='';
				document.getElementById('optdela2').style.display="";
				document.getElementById('tick2').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt2').value='';
				select22(ida);
				
			}
		}
		if(id=='opta3')
		{
		
		if(strCost==life_time_file_storage)
			{
			document.getElementById('opt3').value=life_time_file_storage;
			document.getElementById('optt3').style.display="none";
			document.getElementById('optdel3').style.display="";
			document.getElementById('optdel3').checked="checked";
			document.getElementById('optdela3').style.display="none";
			document.getElementById('tick3').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt3').value='Order lifetime file storage';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel3').style.display="none";
				document.getElementById('opt3').value='';
				document.getElementById('optdela3').style.display="";
				document.getElementById('tick3').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt3').value='';
				select22(ida);
				
			}
		}
		if(id=='opta4')
		{
		
		if(strCost==animated_flash)
			{
			document.getElementById('opt4').value=animated_flash;
			document.getElementById('optt4').style.display="none";
			document.getElementById('optdel4').style.display="";
			document.getElementById('optdel4').checked="checked";
			document.getElementById('optdela4').style.display="none";
			document.getElementById('tick4').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt4').value='Order  an animated FLASH logo version';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel4').style.display="none";
				document.getElementById('opt4').value='';
				document.getElementById('optdela4').style.display="";
				document.getElementById('tick4').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt4').value='';
				select22(ida);
				
			}
		}
		if(id=='opta5')
		{
		
		if(strCost==logo_within_24_hour)
			{
			document.getElementById('opt5').value=logo_within_24_hour;
			document.getElementById('optt5').style.display="none";
			document.getElementById('optdel5').style.display="";
			document.getElementById('optdel5').checked="checked";
			document.getElementById('optdela5').style.display="none";
			document.getElementById('tick5').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt5').value='Get  your logos within 24 hrs';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel5').style.display="none";
				document.getElementById('opt5').value='';
				document.getElementById('optdela5').style.display="";
				document.getElementById('tick5').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt5').value='';
				select22(ida);
				
			}
		}
		if(id=='opta6')
		{
		
		if(strCost==black_n_white_file_logo)
			{
			document.getElementById('opt6').value=black_n_white_file_logo;
			document.getElementById('optt6').style.display="none";
			document.getElementById('optdel6').style.display="";
			document.getElementById('optdel6').checked="checked";
			document.getElementById('optdela6').style.display="none";
			document.getElementById('tick6').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt6').value='Order  black and white file logo version';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel6').style.display="none";
				document.getElementById('opt6').value='';
				document.getElementById('optdela6').style.display="";
				document.getElementById('tick6').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt6').value='';
				select22(ida);
				
			}
		}
		if(id=='opta7')
		{
		
		if(strCost==impress_with_business_card)
			{
			document.getElementById('opt7').value=impress_with_business_card;
			document.getElementById('optt7').style.display="none";
			document.getElementById('optdel7').style.display="";
			document.getElementById('optdel7').checked="checked";
			document.getElementById('optdela7').style.display="none";
			document.getElementById('tick7').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt7').value='Impress with business cards';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel7').style.display="none";
				document.getElementById('opt7').value='';
				document.getElementById('optdela7').style.display="";
				document.getElementById('tick7').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt7').value='';
				select22(ida);
				
			}
		}
		if(id=='opta8')
		{
		
		if(strCost==letter_head)
			{
			document.getElementById('opt8').value=letter_head;
			document.getElementById('optt8').style.display="none";
			document.getElementById('optdel8').style.display="";
			document.getElementById('optdel8').checked="checked";
			document.getElementById('optdela8').style.display="none";
			document.getElementById('tick8').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt8').value='Order  letterhead designs';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel8').style.display="none";
				document.getElementById('opt8').value='';
				document.getElementById('optdela8').style.display="";
				document.getElementById('tick8').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt8').value='';
				select22(ida);
				
			}
		}
		if(id=='opta9')
		{
		
		if(strCost==envalope_design)
			{
			document.getElementById('opt9').value=envalope_design;
			document.getElementById('optt9').style.display="none";
			document.getElementById('optdel9').style.display="";
			document.getElementById('optdel9').checked="checked";
			document.getElementById('optdela9').style.display="none";
			document.getElementById('tick9').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt9').value='Order  envelope designs';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel9').style.display="none";
				document.getElementById('opt9').value='';
				document.getElementById('optdela9').style.display="";
				document.getElementById('tick9').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt9').value='';
				select22(ida);
				
			}
		}
		if(id=='opta10')
		{
		
		if(strCost==compliment_slip)
			{
			document.getElementById('opt10').value=compliment_slip;
			document.getElementById('optt10').style.display="none";
			document.getElementById('optdel10').style.display="";
			document.getElementById('optdel10').checked="checked";
			document.getElementById('optdela10').style.display="none";
			document.getElementById('tick10').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt10').value='Order  compliment slip designs';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel10').style.display="none";
				document.getElementById('opt10').value='';
				document.getElementById('optdela10').style.display="";
				document.getElementById('tick10').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt10').value='';
				select22(ida);
				
			}
		}
		if(id=='opta11')
		{
		
		if(strCost==stationary_design_bundle)
			{
			document.getElementById('opt11').value=stationary_design_bundle;
			document.getElementById('optt11').style.display="none";
			document.getElementById('optdel11').style.display="";
			document.getElementById('optdel11').checked="checked";
			document.getElementById('optdela11').style.display="none";
			document.getElementById('tick11').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt11').value='Order  stationary design bundle';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel11').style.display="none";
				document.getElementById('opt11').value='';
				document.getElementById('optdela11').style.display="";
				document.getElementById('tick11').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt11').value='';
				select22(ida);
				
			}
		}
		if(id=='opta12' && productid=='12' )
		{
		
		document.getElementById('tick112').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==business_card_print_250)
			{
			document.getElementById('opt12').value=business_card_print_250;
			document.getElementById('optt12').style.display="none";
			document.getElementById('optdel12').style.display="";
			document.getElementById('optdel12').checked="checked";
			document.getElementById('optdela12').style.display="none";
			document.getElementById('tick12').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt12').value='250 business cards (matt) including free  delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel12').style.display="none";
				document.getElementById('opt12').value='';
				document.getElementById('optdela12').style.display="";
				document.getElementById('tick12').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt12').value='';
				select22(ida);
				
			}
		}
		if(id=='opta12' && productid=='112')
		{
		
		document.getElementById('tick12').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==business_card_print_500)
			{
			document.getElementById('opt12').value=business_card_print_500;
			document.getElementById('opt112').style.display="none";
			document.getElementById('optdel112').style.display="";
			document.getElementById('optdel112').checked="checked";
			document.getElementById('optdela112').style.display="none";
			document.getElementById('tick112').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt12').value='500  business cards (matt) including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel112').style.display="none";
				document.getElementById('opt12').value='';
				document.getElementById('optdela112').style.display="";
				document.getElementById('tick112').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt12').value='';
				select22(ida);
				
			}
		}
		if(id=='opta13' && productid=='13')
		{
		
		document.getElementById('tick113').innerHTML='<strong>Select </br>here</strong>';
		document.getElementById('tick213').innerHTML='<strong>Select </br>here</strong>';
		if(strCost==letter_head_print_25)
			{
			document.getElementById('opt13').value=letter_head_print_25;
			document.getElementById('optt13').style.display="none";
			document.getElementById('optdel13').style.display="";
			document.getElementById('optdel13').checked="checked";
			document.getElementById('optdela13').style.display="none";
			document.getElementById('tick13').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt13').value='25  letterheads including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel13').style.display="none";
				document.getElementById('opt13').value='';
				document.getElementById('optdela13').style.display="";
				document.getElementById('tick13').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt13').value='';
				select22(ida);
				
			}
		}
		if(id=='opta13' && productid=='113')
		{
		
		document.getElementById('tick13').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick213').innerHTML='<strong>Select </br>here</strong>';
		if(strCost==letter_head_print_250)
			{
			document.getElementById('opt13').value=letter_head_print_250;
			document.getElementById('opt113').style.display="none";
			document.getElementById('optdel113').style.display="";
			document.getElementById('optdel113').checked="checked";
			document.getElementById('optdela113').style.display="none";
			document.getElementById('tick113').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt13').value='250 letterheads including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel113').style.display="none";
				document.getElementById('opt13').value='';
				document.getElementById('optdela113').style.display="";
				document.getElementById('tick113').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt13').value='';
				select22(ida);
				
			}
		}
		if(id=='opta13' && productid=='213')
		{
		
		document.getElementById('tick13').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick113').innerHTML='<strong>Select </br>here</strong>';
		if(strCost==letter_head_print_1000)
			{
			document.getElementById('opt13').value=letter_head_print_1000;
			document.getElementById('opt213').style.display="none";
			document.getElementById('optdel213').style.display="";
			document.getElementById('optdel213').checked="checked";
			document.getElementById('optdela213').style.display="none";
			document.getElementById('tick213').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt13').value='1000  letterheads including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel213').style.display="none";
				document.getElementById('opt13').value='';
				document.getElementById('optdela213').style.display="";
				document.getElementById('tick213').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt13').value='';
				select22(ida);
				
			}
		}
		if(id=='opta14' && productid=='14')
		{
		
		document.getElementById('tick214').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick114').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==envalope_design_print_100)
			{
			document.getElementById('opt14').value=envalope_design_print_100;
			document.getElementById('optt14').style.display="none";
			document.getElementById('optdel14').style.display="";
			document.getElementById('optdel14').checked="checked";
			document.getElementById('optdela14').style.display="none";
			document.getElementById('tick14').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt14').value='100  envelopes including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel14').style.display="none";
				document.getElementById('opt14').value='';
				document.getElementById('optdela14').style.display="";
				document.getElementById('tick14').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt14').value='';
				select22(ida);
				
			}
		}
		if(id=='opta14' && productid=='114')
		{
		
		document.getElementById('tick14').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick214').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==envalope_design_print_250)
			{
			document.getElementById('opt14').value=envalope_design_print_250;
			document.getElementById('opt114').style.display="none";
			document.getElementById('optdel114').style.display="";
			document.getElementById('optdel114').checked="checked";
			document.getElementById('optdela114').style.display="none";
			document.getElementById('tick114').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt14').value='250  envelopes including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel114').style.display="none";
				document.getElementById('opt14').value='';
				document.getElementById('optdela114').style.display="";
				document.getElementById('tick114').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt14').value='';
				select22(ida);
				
			}
		
		}
		if(id=='opta14' && productid=='214')
		{
		
		document.getElementById('tick14').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick114').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==envalope_design_print_1000)
			{
			document.getElementById('opt14').value=envalope_design_print_1000;
			document.getElementById('opt214').style.display="none";
			document.getElementById('optdel214').style.display="";
			document.getElementById('optdel214').checked="checked";
			document.getElementById('optdela214').style.display="none";
			document.getElementById('tick214').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt14').value='1000  envelopes including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel214').style.display="none";
				document.getElementById('opt14').value='';
				document.getElementById('optdela214').style.display="";
				document.getElementById('tick214').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt14').value='';
				select22(ida);
				
			}
		
		}
		if(id=='opta15' && productid=='15')
		{
		
		document.getElementById('tick215').innerHTML='<strong>Select </br>here</strong>';
		document.getElementById('tick115').innerHTML='<strong>Select </br>here</strong>';		
		if(strCost==complement_slip_100)
			{
			document.getElementById('opt15').value=complement_slip_100;
			document.getElementById('optt15').style.display="none";
			document.getElementById('optdel15').style.display="";
			document.getElementById('optdel15').checked="checked";
			document.getElementById('optdela15').style.display="none";
			document.getElementById('tick15').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt15').value='100  compliment slips including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel15').style.display="none";
				document.getElementById('opt15').value='';
				document.getElementById('optdela15').style.display="";
				document.getElementById('tick15').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt15').value='';
				
				select22(ida);
			}
		}
		if(id=='opta15' && productid=='115')
		{
		
		document.getElementById('tick15').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick215').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==complement_slip_250)
			{
			document.getElementById('opt15').value=complement_slip_250;
			document.getElementById('opt115').style.display="none";
			document.getElementById('optdel115').style.display="";
			document.getElementById('optdel115').checked="checked";
			document.getElementById('optdela115').style.display="none";
			document.getElementById('tick115').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt15').value='250  compliment slips including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel115').style.display="none";
				document.getElementById('opt15').value='';
				document.getElementById('optdela115').style.display="";
				document.getElementById('tick115').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt15').value='';
				select22(ida);
				
			}
		}
		if(id=='opta15' && productid=='215')
		{
		
		document.getElementById('tick15').innerHTML='<strong>Select </br>here</strong>';	
		document.getElementById('tick115').innerHTML='<strong>Select </br>here</strong>';	
		if(strCost==complement_slip_1000)
			{
			document.getElementById('opt15').value=complement_slip_1000;
			document.getElementById('opt215').style.display="none";
			document.getElementById('optdel215').style.display="";
			document.getElementById('optdel215').checked="checked";
			document.getElementById('optdela215').style.display="none";
			document.getElementById('tick215').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt15').value='1000  compliment slips including free delivery';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel215').style.display="none";
				document.getElementById('opt15').value='';
				document.getElementById('optdela215').style.display="";
				document.getElementById('tick215').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt15').value='';
				select22(ida);
			}
		}
		if(id=='opta18')
		{
			
			
			if(strCost==pen_with_logo)
			{
			document.getElementById('opt18').value=pen_with_logo;
			document.getElementById('optt18').style.display="none";
			document.getElementById('optdel18').style.display="";
			document.getElementById('optdel18').checked="checked";
			document.getElementById('optdela18').style.display="none";
			document.getElementById('tick18').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt18').value='Order <u>pens </u>with  your personal logo on (free delivery)!';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel18').style.display="none";
				document.getElementById('opt18').value='';
				document.getElementById('optdela18').style.display="";
				document.getElementById('tick18').innerHTML='<strong>Select </br>here</strong>';	
				document.getElementById('extraopt18').value='';
				select22(ida);
				
			}
		}
		if(id=='opta19')
		{
			
			if(strCost==bag_with_logo)
			{
			document.getElementById('opt19').value=bag_with_logo;
			document.getElementById('optt19').style.display="none";
			document.getElementById('optdel19').style.display="";
			document.getElementById('optdel19').checked="checked";
			document.getElementById('optdela19').style.display="none";
			document.getElementById('tick19').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
			document.getElementById('extraopt19').value='Order a <u>cotton  carrier bag </u>with your personal logo on (free delivery)!';
			}
			
			if(strCost=='0.00')
			{
				
						
				document.getElementById('optdel19').style.display="none";
				document.getElementById('opt19').value='';
				document.getElementById('optdela19').style.display="";
				document.getElementById('tick19').innerHTML='<strong>Select </br>here</strong>';
				document.getElementById('extraopt19').value='';
				select22(ida);
				
			}
			
		}
        var txtGroupProductID = document.getElementById("TxtGroupProductID");
        var txtGroupID = document.getElementById("TxtGroupID");
        var count=0;
           if(strCost!='0.00')
           {
            var cell1;
            var cell2;
            var cellData1;
            var cellData2;
            var found=0;
            
            var newRow;
            var newCell;
    	    var newCell1;
    	    var newCell2;
            var tbl = document.getElementById('tblFloat');
           
           for (i=0; i<tbl.rows.length; i++)
           { 
           if( tbl.rows[i].id == id)
             {
              found=1;
              newRow = tbl.rows[i];
              newRow.setAttribute('title',productid);
              newCell = newRow.cells[0];
              newCell1 = newRow.cells[1];
              newCell2 = newRow.cells[2];
               
             }
             
           }
            
           if (found==0)
           {
               newRow = tbl.insertRow(tbl.rows.length);
               newRow.id= id;//tbl.rows.length
               
               newRow.setAttribute('title',productid);
                              
               newCell = newRow.insertCell(0);
               newCell1 = newRow.insertCell(1);
               newCell2 = newRow.insertCell(2);
               newCell2.align='right';
                              
               newCell.className = 'basketdesc';
               newCell1.className = 'basketdesc';
               newCell2.className = 'basketdesc';            
               
           }
           
           var RowNo = tbl.rows.length;
           newCell.innerHTML = strProduct;
           newCell1.innerHTML = '&nbsp;';
           newCell2.innerHTML = currency + strCost; 
		           
          }
           else
          {
          
           var tbl = document.getElementById('tblFloat');
           for (i=0; i<tbl.rows.length; i++)
               {
                if( tbl.rows[i].id == id)
                 {
                 tbl.deleteRow(i);
                 
                 }
               }
          
          }
		   var tbl = document.getElementById('tblFloat');
			var ja=tbl.rows.length;
			if(ja==2)
			{
			document.getElementById("bgimg").innerHTML="<img src=" + baseUrl + "images/basket-image/photolia5.gif>";
			}
			if(ja==3)
			{
			document.getElementById("bgimg").innerHTML="<img src=" + baseUrl + "images/basket-image/photolia3.gif>";
			}
			if(ja==4)
			{
			document.getElementById("bgimg").innerHTML="<img src=" + baseUrl + "images/basket-image/photolia1.gif>";
			}
			
          AddAmount();
                   
        }
        
        
        
        function AddAmount()
        {
         
           var AddNum=0.00; 
           var CellTd;
           
           var tbl = document.getElementById('tblFloat');
           
           for (i=0; i<tbl.rows.length; i++)
               {
                CellTd = tbl.rows[i].cells[2];
                s = CellTd.firstChild.data;
                s = s.replace(",","");
                
                if (s.substring(0,1)=='-')
                {
                    //alert(s.substring(3,s.length));
                    ss = s.substring(3,s.length);
                    AddNum = parseFloat(AddNum) - parseFloat(ss);
                }
                else
                {
                    ss=s.substring(1,s.length);
                    AddNum = parseFloat(ss) + parseFloat(AddNum);
                }

               }
              
               document.getElementById("LblYouPay").value =  r2(AddNum); //AddNum;
			   
        }
        
        function r2(n) { 

                  ans = n * 1000 
                  ans = Math.round(ans /10) + "" 
                  while (ans.length < 3) {ans = "0" + ans} 
                  len = ans.length
                   
                  if(ans.substring(0,len-2).length == 4)
                  {document.getElementById("LblYouPay").style.width="63px";
                  ans = ans.substring(0,1) + "," + ans.substring(1,len-2) + "." + ans.substring(len-2,len)
                  }
                  else
                  { if(ans.substring(0,len-2).length == 3)
                  { document.getElementById("LblYouPay").style.width="52px";}
                    else if(ans.substring(0,len-2).length == 2)
                    {document.getElementById("LblYouPay").style.width="45px";}
                    else if(ans.substring(0,len-2).length == 1)
                    {document.getElementById("LblYouPay").style.width="36px";}
                    
                  ans = ans.substring(0,len-2) + "." + ans.substring(len-2,len)
                  
                  }
				
                  return ans 
         } 
         function select22(rowName)
		 {
		 	          
			 var tbl = document.getElementById('tblFloat');
			 //tbl.deleteRow(3);
			 		
			 	
				if (!document.getElementById(rowName)) return;
for (var i = 0; i < document.getElementById('tblFloat').rows.length; i++)
{
	if (document.getElementById('tblFloat').rows[i].id == rowName)
		{
			document.getElementById('tblFloat').deleteRow(i);
			
			//document.getElementById(name).value='0.00';
			
			
			
			    AddAmount();
         // location.replace("delete_session.php?del_name="+name);
      
          
        }
        
        
        
        
		
}
 						
 
 
			 	
			
		}
         
		 
		 
		 function selectbox1(strProduct,strCost,id,productid)
        {
			
			var ida=id+'a';
			//var tbl=document.getElementById('tblFloat');
			
			//if (!document.getElementById(rowName)) return;
        for (var i = 0; i < document.getElementById('tblFloat').rows.length; i++)
           {
				if (document.getElementById('tblFloat').rows[i].id == ida)
					{
						document.getElementById('tblFloat').deleteRow(i);
			
						var x=document.form1.LblYouPay.value;
						if(productid=='20')
						{
						var totalbefore=eval(strCost * document.form1.selectbox4.value) + eval(strCost * document.form1.selectbox5.value) + eval(strCost*document.form1.selectbox6.value) + eval(strCost * document.form1.selectbox7.value) + eval(strCost * document.form1.selectbox8.value);
	}
						if(productid=='16')
						{
						var totalbefore=eval(strCost * document.form1.selectbox.value);
						}
						
						if(productid=='17')
						{
						var totalbefore=eval(strCost * document.form1.selectbox2.value);
						}
			var total=eval(x-totalbefore);
			document.getElementById('LblYouPay').value=total;
			SelectAll_2(strProduct,strCost,id,productid);
			
		}
		
		
}
SelectAll_2(strProduct,strCost,id,productid);
}

