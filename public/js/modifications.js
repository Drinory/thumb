$(document).ready(function(){
    
    // Fetch all records
    x=3;
     $('#but_fetchall').click(function(){
        
        fetchRecords(x);
        x+=3;
        
     });
    
    function fetchRecords(n){
        $.ajax({
        url: 'getPosts/'+n,
        type: 'get',
        dataType: 'json',
            success: function(response){
                if(response['data'] != null){
                    len = response['data'].length;
                    if(len<3){              
                        $('#but_fetchall').css('visibility', 'hidden');
                    }
                    for(i=0; i<=len; i++){
                        var title = response['data'][i].title;
                        var Div = "<h1>"+ title + "</h1>";
                        $(Div).appendTo("#userTable");
                    } 
                }

            }
        });
 
    }
});
