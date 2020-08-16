$(document).ready(function(){
    
    // Fetch all records
    x=3;
     $('#but_fetchall').click(function(){
        
        fetchRecords(x);
        x+=3;
        
     });
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
    
    function fetchRecords(n){
        $.ajax({
        url: 'getPosts/'+n,
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

                    var thisDiv = "<div class='blog-item post mb-6 moreBox'>" + 
                             "<div class='blog-inner'>" + 
                                 "<a href='show/" + id + "'>" +
                                     "<div class='overlay'>" + "<i class='mdi-link-variant'>" + "</i>" + "</div>"+
                                     "<img src='../../images/blog/blog_24.jpg' alt='' />"+
                                 "</a>"+
                                 "<div class='info'>"+
                                     "<div class='tags'>"+
                                         "<a href='" + categoryLink(category) +  "'>" + category + "</a>"+
                                     "</div>"+
                                     "<div class='title'>"+
                                         "<a href='show/" + id + "'>" +  title + "</a>" + 
                                     "</div>" +
                                     "<div class='meta'>"+
                                         "<span class='date'>" + d + "/" + m + "/" + y + "</span>" +
                                         "<div class='divider'>" + "-" + "</div>" +
                                         "<span class='author'>" + "Postuar nga " +  "<a href='team'>" + "Blerim Iseni" + "</a>" + "</span>" +
                                     "</div>"+
                                     "<div class='text'>"+
                                         "<p style='height: 80px; overflow:hidden;'>" + text + "</p>" +
                                         "<a href='show/" + id + "' class='button small'>" + "Read more" + "</a>" +
                                     "</div>" +
                                 "</div>" +
                                 "<div class='info-bottom'>" +
                                     "<div class='date'>" + d + "/" + m + "/" + y + "</div>" +
                                     
                                     "<div class='comment'>" +
                                         "<a href='" +  categoryLink(category) + "'>" + "Kategoria: " + category + "</a>" +
                                     "</div>"+
                                 "</div>"+
                             "</div>"+
                         "</div>";
                        
                         $(thisDiv).appendTo("#userTable").hide().fadeIn('slow');

                        if(len<3){              
                            $('#but_fetchall').css('visibility', 'hidden');
                            // var otherDiv = "<h2>"
                            //         +"NUK KA ME POSTE"+
                            //     +"</div>";
                            // $(otherDiv).appendTo("#userTable").hide().fadeIn('slow');
                        }
                    } 
                    
                }

            }
        });
 
    }
});
