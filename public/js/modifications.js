$(document).ready(function(){
    
    // Fetch all records
     $('#but_fetchall').click(function(){

        fetchRecords();

     });
     
 
 var num = 6;
 var len = 0;
  function fetchRecords(){
    $.ajax({
      url: 'getPosts',
      type: 'get',
      dataType: 'json',
      success: function(response){

        $('#userTable ').empty(); 
        if(response['data'] != null){
           len = response['data'].length;
        }

        var i = 0;
        if(len > num){
        
           for(i; i<num; i++){
            var title = response['data'][i].title;
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
                                 "<a href='blog-detail.html'>" +
                                     "<div class='overlay'>" + "<i class='mdi-link-variant'>" + "</i>" + "</div>"+
                                     "<img src='../../images/blog/blog_24.jpg' alt='' />"+
                                 "</a>"+
                                 "<div class='info'>"+
                                     "<div class='tags'>"+
                                         "<a href='#'>" + category + "</a>"+
                                     "</div>"+
                                     "<div class='title'>"+
                                         "<a href='blog-detail.html'>" +  title + "</a>" + 
                                     "</div>" +
                                     "<div class='meta'>"+
                                         "<span class='date'>" + d + "/" + m + "/" + y + "</span>" +
                                         "<div class='divider'>" + "-" + "</div>" +
                                         "<span class='author'>" + "Postuar nga " +  "<a href='#'>" + "Blerim Iseni" + "</a>" + "</span>" +
                                     "</div>"+
                                     "<div class='text'>"+
                                         "<p style='height: 80px; overflow:hidden;'>" + text + "</p>" +
                                         "<a href='#' class='button small'>" + "Read more" + "</a>" +
                                     "</div>" +
                                 "</div>" +
                                 "<div class='info-bottom'>" +
                                     "<div class='date'>" + d + "/" + m + "/" + y + "</div>" +
                                     
                                     "<div class='comment'>" +
                                         "<a href='#'>" + "Kategoria:" + category + "</a>" +
                                     "</div>"+
                                 "</div>"+
                             "</div>"+
                         "</div>";
                         
              $(thisDiv).appendTo("#userTable").hide().fadeIn('slow');
              
            
              
            var z= len-num;
            if(z < 3){
                for(z; z<=len; z++){
                    var title = response['data'][z].title;
                    var text = response['data'][z].text;
                    var image = response['data'][z].image;
                    var category = response['data'][z].category;
      
                    var otherDiv = "<div class='blog-item post mb-6 moreBox'>" + 
                                   "<div class='blog-inner'>" + 
                                       "<a href='blog-detail.html'>" +
                                           "<div class='overlay'>" + "<i class='mdi-link-variant'>" + "</i>" + "</div>"+
                                           "<img src='../../images/blog/blog_24.jpg' alt='' />"+
                                       "</a>"+
                                       "<div class='info'>"+
                                           "<div class='tags'>"+
                                               "<a href='#'>" + category + "</a>"+
                                           "</div>"+
                                           "<div class='title'>"+
                                               "<a href='blog-detail.html'>" +  title + "</a>" + 
                                           "</div>" +
                                           "<div class='meta'>"+
                                               "<span class='date'>" + "12" + "</span>" +
                                               "<div class='divider'>" + "-" + "</div>" +
                                               "<span class='author'>" + "Postuar nga " +  "<a href='#'>" + "Blerim Iseni" + "</a>" + "</span>" +
                                           "</div>"+
                                           "<div class='text'>"+
                                               "<p style='height: 80px; overflow:hidden;'>" + text + "</p>" +
                                               "<a href='#' class='button small'>" + "Read more" + "</a>" +
                                           "</div>" +
                                       "</div>" +
                                       "<div class='info-bottom'>" +
                                           "<div class='date'>" + "12" + "</div>" +
                                           
                                           "<div class='comment'>" +
                                               "<a href='#'>" + "Kategoria:" + category + "</a>" +
                                           "</div>"+
                                       "</div>"+
                                   "</div>"+
                               "</div>";
                               
              $(otherDiv).appendTo("#userTable").hide().fadeIn('slow');
              $('#but_fetchall').css('visibility', 'hidden');
                }
            }
            }
        num += 3;
        i += 3;
        } 
    }});
  }
});
