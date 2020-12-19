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
			url: '/manage-user/get-user',
            method: 'post',
            datatype: 'json',
			data : {'userName':searchText},
			success:function(response){
				if(response.user !== 'error' && response.user !== undefined){
                    console.log(response);
                    console.log('Success');
				}else{
                    console.log(response);
                    console.log('Failed');
				}
			},
			error:function(response){
                var text = response.responseText.substring(searchText.length);
                var user = JSON.parse(text);
                console.log(user.user_name);
                $('#myTable tbody').empty();                    
                $('#myTable tbody:last-child').append('<tr><td>'+user.emp_name+'</td><td>'+user.user_name+'</td><td>'+user.company_name+'</td><td>'+user.phone+'</td><td><img src="{{asset(uploads'+'/.'+user.profile+')}} width="100px" height="100px"></td></tr>');
				//console.log('server error');
			}
        });
        
	});
});