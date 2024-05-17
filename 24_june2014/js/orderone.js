 function SelectAll_21(strProduct,strCost,id,productid){
		if(id=='option55' && productid=='1'){
    		document.getElementById('tick2').innerHTML='<strong>Select </br>here</strong>';	
    		document.getElementById('tick3').innerHTML='<strong>Select </br>here</strong>';	
        		if(strCost==express_delivery){
        			document.getElementById('option').value=express_delivery;
        			document.getElementById('option99').style.display="none";
        			document.getElementById('option1').style.display="";
        			document.getElementById('option1').checked="checked";
        			document.getElementById('optiona1').style.display="none";
        			document.getElementById('tick1').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
        			document.getElementById('blackn24').value='24 hours delivery';
        			}
        			
        			if(strCost=='0.00'){
        				
        				document.getElementById('option').value='';	
        				document.getElementById('option1').style.display="none";
        				document.getElementById('optiona1').style.display="";
        				document.getElementById('tick1').innerHTML='<strong>Select </br>here</strong>';	
        				document.getElementById('blackn24').value='';
                        select2('removeopt');
        				
        			}
		}
		
		if(id=='option55' && productid=='2'){
    		document.getElementById('tick1').innerHTML='<strong>Select </br>here</strong>';	
    		document.getElementById('tick3').innerHTML='<strong>Select </br>here</strong>';	
        		if(strCost==black_n_white){
        			document.getElementById('option').value=black_n_white;
        			document.getElementById('option2').style.display="none";
        			document.getElementById('option12').style.display="";
        			document.getElementById('option12').checked="checked";
        			document.getElementById('optiona2').style.display="none";
        			document.getElementById('tick2').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
        			document.getElementById('blackn24').value='Black and white additional logo design file';
        			}
        			
        			if(strCost=='0.00'){
        				document.getElementById('option').value='';		
        				document.getElementById('option12').style.display="none";
        				document.getElementById('optiona2').style.display="";
        				document.getElementById('tick2').innerHTML='<strong>Select </br>here</strong>';	
        				document.getElementById('blackn24').value='';
        				select2('removeopt');
        				
        			}
		}
		
		if(id=='option55' && productid=='3'){
    		document.getElementById('tick1').innerHTML='<strong>Select </br>here</strong>';	
    		document.getElementById('tick2').innerHTML='<strong>Select </br>here</strong>';	
        		if(strCost==both_services)
        			{
        			document.getElementById('option').value=both_services;
        			document.getElementById('option3').style.display="none";
        			document.getElementById('option13').style.display="";
        			document.getElementById('option13').checked="checked";
        			document.getElementById('optiona3').style.display="none";
        			document.getElementById('tick3').innerHTML='<img src="'+baseUrl+'images/basket-image/correct.gif"/>';
        			document.getElementById('blackn24').value='24 Hour Delivery and Black and White file';
        			}
        			
        			if(strCost=='0.00')
        			{
        				
        				document.getElementById('option').value='';		
        				document.getElementById('option13').style.display="none";
        				document.getElementById('optiona3').style.display="";
        				document.getElementById('tick3').innerHTML='<strong>Select </br>here</strong>';	
        				document.getElementById('blackn24').value='';
        				select2('removeopt');
        				
        			}
		}
		
        
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
           newCell2.innerHTML = currency + strCost;       // Define Currency Sign BY Using 'currency' variable
		           
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
			document.getElementById("bgimg").innerHTML='<img src="'+baseUrl+'images/basket-image/photolia5.gif">';
			}
			if(ja==3)
			{
			document.getElementById("bgimg").innerHTML='<img src="'+baseUrl+'images/basket-image/photolia3.gif>';
			}
			if(ja==4)
			{
			document.getElementById("bgimg").innerHTML='<img src="'+baseUrl+'images/basket-image/photolia1.gif>';
			}
			
			
          AddAmount();
              
          
        }
        
        
        
    function AddAmount(){
       var AddNum=0.00; 
       var CellTd;
       var tbl = document.getElementById('tblFloat');
       
           for (i=0; i<tbl.rows.length; i++){
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
               
              if(ans.substring(0,len-2).length == 4){
                document.getElementById("LblYouPay").style.width="63px";
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
     
     	function select2(rowName)
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
        
        }
        
        
        
        
}
 						
 
 
			 	
			
		}
