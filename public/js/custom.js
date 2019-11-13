$(document).ready(function(){
    $('.search-text').on('keyup', function(){
        $.ajax({
            url:'/post',
            type:'GET',
            dataType:'json',
            data: {
                'search': $('.search-text').val()
            },
            success: function(data){
                $('.article_list').html(data['view']);
                console.log(data);
            },
            error: function(xhr, status){
                console.log(xhr.error + "ERROR STATUS : " + status);
            },
            complete: function(){
                alreadyloading = false;
            }
        });
    });
    
    $('.comment').on('click',function(){
        $.ajax({
            url: '/comments',
            type: 'POST',
            dataType: 'json',
            data: $('.comment_form').serialize(), 
            // {
            //     'article_id': $('.article_id').val(),
            //     'content': $('.content').val(),
            //     'user': $('.user').val()
            // },
            success: function(data){
                $('.comments_list').html(data['view']);
                $('.comment_form').trigger("reset");
                console.log(data);
            },
            error: function(xhr, status){
                console.log(xhr.error + " ERROR STATUS : " + status);
            },
            complete: function(){
                alreadyloading = false;
            }
        });
    });
});