$(document).ready(function(){
	$('#searchBox').on('keyup', function(){
        var searchText = $("#searchBox").val();
        
        console.log(searchText);
        if(searchText.trim()==''){
            $('#myTable tbody')=null;
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
         
		$.ajax({
			url: '/manage-product/get-product',
            method: 'post',
            datatype: 'json',
			data : {'productName':searchText},
			success:function(response){
				if(response.product !== 'error' && response.product !== undefined){
                    console.log(response);
                    console.log('Success');
				}else{
                    console.log(response);
                    console.log('Failed');
				}
			},
			error:function(response){
                var text = response.responseText.substring(searchText.length);
                var product = JSON.parse(text);
                console.log(product.name);
                $('#myTable tbody').empty();                    
                $('#myTable tbody:last-child').append('<tr><td>'+product.name+'</td><td>'+product.quantity+'</td><td>'+product.price);
				//console.log('server error');
			}
        });
        
	});
});