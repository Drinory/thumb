$(document).ready(function(){
    
    // Set the x to 3 so it skips the first 3
    x=3;
    // Get the original full link and the curent link and extract current link from 
    // the original in order to get the id of category from the link and store it in "both"
    var origin   = window.location.origin; 
    var thisLink =  $(location).attr("href");
    var both =  thisLink. replace(origin + "/",'');
    // On click call the fetchRecords function and add 3 to the X variable
     $('#button_fetchall').click(function(){
        
        fetchRecords(x, both);
        x+=3;
        
     });

    //  Function to display catgory as text not as number (as is stored in the database)
     function categoryLink(c){
        switch(c){
            case "Keqperdorimet":
                return 1;
            break;

            case "Korrupsionin":
                return 2;
            break;

            case "Partite Politike":
                return 3;

            default: return 4;
        } 
     }
    
    // Function that gets 3 posts, skiping the first 3, than 6 and so on. 
    //  All those with the same category, in this case stored in the var "y"
    function fetchRecords(n , y){
        $.ajax({
        url: 'getPosts/'+ n + "/" + y,
        type: 'get',
        dataType: 'json',
            success: function(response){
                if(response['data'] != null){
                    len = response['data'].length;
                    
                    for(i=0; i<=len; i++){
                        var title = response['data'][i].title;
                        var id = response['data'][i].id;
                        var text = response['data'][i].text;
                        var d = response['data'][i].created_at;
                        var image = response['data'][i].image;
                        var category = response['data'][i].category;
                        var formattedDate = new Date(d);
                        var d = formattedDate.getDate();
                        var m =  formattedDate.getMonth();
                        m += 1;
                        var y = formattedDate.getFullYear();
                        // Create the post
                        var thisDiv = "<div class='col-md-4'>"+
                            "<div class='blog-item text-center mb-6'>"+
                                "<div class='blog-inner'>"+
                                        "<a 'show/" + id + "'>" + 
                                            "<div class='overlay'>" + "<i class='mdi-link-variant'>" + "</i>" + "</div>"+
                                            "<img src='../../images/blog/blog_24.jpg' alt='' />"+
                                        "</a>"+
                                        "<div class='info' style='height:300px;'>"+
                                            "<div class='tags' style='height:30px;'>"+
                                                "<a href='" + categoryLink(category) + "'>" + category +"</a>"+
                                        "</div>"+
                                            "<div class='title' style='height:70px;'>"+
                                                "<a href='show/" + id + "'>" +  title + "</a>"+
                                            "</div>" +
                                            "<div class='text'>"+
                                                "<p style='height:155px; overflow:hidden;'>" + text + "</p>" +
                                                "<a href='show/" + id + "'class='button small'>" + "Lexo Me Shume" + "</a>"+
                                            "</div>"+
                                        "</div>"+
                                        "<div class='meta'>"+
                                        "<span class='date'>" + d + "/" + m + "/" + y + "</span>" +
                                        "<span class='author'>" + "Postuar nga: " + "<a href=''>" + "Blerim Iseni" + "</a>" + "</span>"+
                                    "</div>"+
                                "</div>"+
                            "</div>";
                    
                        // Append it 
                        $(thisDiv).appendTo("#userTables").hide().fadeIn('slow');
                        
                        // If there are less than 3 posts left, make button disappear 
                        if(len<3){              
                            $('#button_fetchall').css('visibility', 'hidden');
                        }
                    } 
                    
                }

            }
        });
 
    }
});
