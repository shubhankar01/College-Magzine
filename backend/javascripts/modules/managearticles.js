$(document).ready(function(){

	ont = $('.article-datatable table').dataTable(
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
    $.post('ajax.php',
    {
        func: 'getAllArticles'
    }, function (data)
    {
        articleObj = jQuery.parseJSON(data);
        $.each(articleObj, function (i, val)
        {
        	var Actions = '<center><img src="../images/Detail.png" class="view-image" title="View Article" id="'+val['articleid']+'" name="'+i+'"/><img src="../images/Edit.png" class="edit-image" title="Detail" id="'+val['articleid']+'" name="'+i+'"/><img src="../images/Delete.png" class="delete-image" title="Delete Article" id="'+val['articleid']+'"/></center>'
            ont.fnAddData([(i + 1),val['title'],JSON.stringify(val['content']).toString().substring(0,50)+"...",Actions]);
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
	
	$('#post-article').submit(function(){
	
		if($('.select').val() == 'Select One'){
			alert('Select a valid Category');
			return false;
		}
		else
			return true;
	});
	
	$('.delete-image').live('mouseenter', function (){
        	
    	$(this).attr('src','../images/Delete_hover.png');
    	
    });
    $('.delete-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../images/Delete.png');
    	
    });
    $('.edit-image').live('mouseenter', function (){
        	
    	$(this).attr('src','../images/Edit_hover.png');
    	
    });
    $('.edit-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../images/Edit.png');
    	
    });
	$('.view-image').live('mouseenter', function (){
        	
    	$(this).attr('src','../images/Detail_hover.png');
    	
    });
    $('.view-image').live('mouseleave', function (){
    	
    	$(this).attr('src','../images/Detail.png');
    	
    });
	$('.delete-image').live('click', function ()
    {
		var pos = $(this).closest('tr').prevAll().length; 
		$.post('ajax.php',
        {
            func: 'delete-article',
            id: $(this).attr('id')
        }, function (data)
        {
            ont.fnDeleteRow(pos);
            alert(data);
        });

    });
    $('.view-image').live('click',function(){
   	var index = $(this).attr('name');
   		var id = $(this).attr('id');
   		$('.fancybox-form').find('#title').val(articleObj[index]['title']);
   		$('.fancybox-form').find('#authors').val(articleObj[index]['authors']);
   		$('.fancybox-form').find('#content').html(articleObj[index]['content']);
   		$('.fancybox-form').find('#title').attr('readonly','readonly');
   		$('.fancybox-form').find('#authors').attr('readonly','readonly');
   		$('.fancybox-form').find('#content').attr('readonly','readonly');
   		$('.fancybox-form').find('#category').val(articleObj[index]['category']).attr('selected', 'selected');
	    $('.fancybox-form').find('#category').prop('disabled', 'disabled');
	    $('.fancybox-form').find('#submit-form').hide();
   		fancy = $('.fancybox-form #view-form').fancybox(function(){}).click();
   });
   $('.edit-image').live('click',function(){
   	var index = $(this).attr('name');
   		var id = $(this).attr('id');
   		$('.fancybox-form').find('#atricleid').val(id);
   		$('.fancybox-form').find('#title').val(articleObj[index]['title']);
   		$('.fancybox-form').find('#authors').val(articleObj[index]['authors']);
   		$('.fancybox-form').find('#content').html(articleObj[index]['content']);
   		$('.fancybox-form').find('#title').removeAttr('readonly');
   		$('.fancybox-form').find('#authors').removeAttr('readonly');
   		$('.fancybox-form').find('#content').removeAttr('readonly');
   		$('.fancybox-form').find('#category').val(articleObj[index]['category']).attr('selected', 'selected');
	    $('.fancybox-form').find('#category').removeAttr('disabled');
	    $('.fancybox-form').find('#submit-form').show();
   		fancy = $('.fancybox-form #view-form').fancybox(function(){}).click();
   });
   
   $('#submit-form').live('click',function(){
		//alert($(this).parent().find('#atricleid').val());
		var me = $(this).parent();
		$.post('ajax.php',
        {
            func: 'edit-article',
            articleid: me.find('#atricleid').val(),
            title: me.find('#title').val(),
            authors: me.find('#authors').val(),
            content: me.find('#content').html(),
            category:me.find('#category').val(),
        }, function (data)
        {
            alert(data);
           
        }).complete(function(){
             $.fancybox.close();
        });
	});
});
