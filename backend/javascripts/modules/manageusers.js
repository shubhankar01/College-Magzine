$(document).ready(function ()
{
    usersObj = null;
    //detailObj = null;
    ///feature_count = 0;
    //max_feature_count = 6;
    //toggle = null;
    ont = $('.user-datatable table').dataTable(
    {
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        //"bProcessing": true,
        //"bServerSide": true,
        //"sAjaxSource": "paging_inbox.php",
        "fnDrawCallback": function ()
        {
            var i = 0;
            $('tbody').find('tr').each(function ()
            {
					
            });
        }
    });

    //startLoader();
    $.post('ajax.php',
    {
        func: 'getAllUsers'
    }, function (data)
    {
        usersObj = jQuery.parseJSON(data);
        $.each(usersObj, function (i, val)
        {
            ont.fnAddData([(i + 1),val['firstname'],val['email'],"Actions"]);
            //alert((i + 1)+" "+val['firstname']+" "+val['email']+" Actions");
			
        });
        
    }).complete(function ()
    {
    	//stopLoader();
    	 $('table tbody tr').each(function (i)
        {
            //$(this).addClass('hover-class');
            
        });
        	
			
 });
	
    /*$('.cancel-image').mouseenter(function (){
        	
    	$(this).attr('src','../../resources/images/Delete_hover.png');
    	
    });
    $('.cancel-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../../resources/images/Delete.png');
    	
    });

	 $('.print-image').live('mouseenter', function (){
    	
    	$(this).attr('src','../../resources/images/Print_hover.png');
    	
    });
    $('.print-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../../resources/images/Print.png');
    	
    });
    $('.detail-image').live('mouseenter', function (){
    	
    	$(this).attr('src','../../resources/images/Detail_hover.png');
    	
    });
    $('.detail-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../../resources/images/Detail.png');
    	
    });
    $('.dispatch-image').live('mouseenter', function (){
    	
    	$(this).attr('src','../../resources/images/Dispatch_hover.png');
    	
    });
    $('.dispatch-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../../resources/images/Dispatch.png');
    	
    });
          //startLoader();
    $('.cancel-image').live('click', function ()
    {
		var pos = $(this).closest('tr').prevAll().length; 
		$.post('ajaxHandler.php',
        {
            func: 'cancel-order',
            id: $(this).attr('id')
        }, function (data)
        {
            ont.fnDeleteRow(pos);
            alert(data);
        });

    });
     $('.dispatch-image').live('click', function()
    {
    	var pos = $(this).closest('tr').prevAll().length; 
    	$('#dispatch-form #inv-id').val($(this).attr('id'));
    	$('#dispatch-form #inv-id').attr('name',pos);
		fancy = $('.fancybox-form #dispatch-form').fancybox(function(){}).click();
	});
	
	$('.dispatch').live('click',function(){
	
		$.post('ajaxHandler.php',
        {
            func: 'dispatch-order',
            id: $(this).parent().find('#inv-id').val(),
            dispatchDate:$(this).parent().find('#datepicker').val(),
            dispatchCompany:$(this).parent().find('#dispatch-company').val(),
            dispatchTrackingNum:$(this).parent().find('#dispatch-trackingnum').val()
        }, function (data)
        {
            alert(data);
           
        }).complete(function(){
        	ont.fnDeleteRow($('#dispatch-form').find('#inv-id').attr('name'));
             $.fancybox.close();
        });
	});
   
   $('.detail-image').live('click',function(){
   	var index = $(this).attr('name');
   		var id = $(this).attr('id');
   		$.post('ajaxHandler.php',
        {
            func: 'get-order-details',
            id: $(this).attr('id')
        }, function (data)
        {
            detailObj = jQuery.parseJSON(data);
            //alert(data);
            //alert(orderObj[obj.attr('name')]['invoiceRefID']);
           	$('.detail-view-head').html('Order No #'+orderObj[index]['invoiceRefID']);
           	$('.detail-view-date').html('Placed On '+orderObj[index]['invoiceDate']);
           	$('#detail-view table').html('<tr><th style="width:400px;text-align:left !important;padding-left:10px;">Item</th><th style="width:150px;">Quantity</th><th style="width:150px;">Amount</th></tr>');
           	$.each(detailObj, function (i, val)
        	{
        		$('#detail-view table').append('<tr ><td><div class="detail-item-info"><img src="../../uploads/inventory/items/'+val['photoLink']+'" class="detail-item-image"/><div class="detail-item-info"> <label class="detail-item-name">'+val['itemName']+'</label><label class="detail-category">'+val['categoryName']+'</label></div></div></td><td class="td-center">'+val['stockQuantity']+'</td><td class="td-center">'+val['stockAmount']+'</td></tr>');	
        	});
        	$('.detail-shippping-address .detail-address').html(orderObj[index]['shippingName']+'<br />'+orderObj[index]['shippingStreetAddress']+'<br />'+orderObj[index]['shippingLandmark']+'<br />'+orderObj[index]['shippingCity']+'<br />'+orderObj[index]['shippingState']+'<br />'+orderObj[index]['shippingCountry']+'<br />'+orderObj[index]['shippingPinCode']+'<br />');
            $('.detail-shippping-address .detail-no').html('Contact No: '+orderObj[index]['shippingMobile']);
            fancy = $('.fancybox-form #detail-view').fancybox(function(){}).click();
            
        });
   });
	
	$(document).tooltip();
	$( "#datepicker" ).datepicker();
	*/
});

/*
function startLoader()
{
    $.blockUI(
    {
        message: '<h6><img src="../../../resources/images/misc/busy.gif"" /> Just a moment...</h6>'
    });
}

function stopLoader()
{
    $.unblockUI();
}
*/