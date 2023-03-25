jQuery(document).ready(function(){

});

//ajax method to follow user
function followUser(followerId){
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url : "follower",
        data : {'follower_id' : followerId},
        type : 'POST',
        dataType : 'json',
        success : function(data){
            $('.success-message').html(data.message);
            $('.alert-success').show();
            $('.suggest-'+followerId).remove();
            if($('.who-to-follow-list li').length == 0){
                $('.who-to-follow-list').html('<li>No users to show</li>');
            }
        },error:function(){
            $('.alert-danger').show();
        }
    });
    setTimeout(closeAlert, 4000);
}

//function to close the alert pop-up
function closeAlert(){ 
    $('.alert').hide().slideUp( 300 ).delay( 300 ).fadeOut( 400 );
}

//function to store a tweet
function createTweet(){ 
    if($('.tweet-content').val().length > 0){ 
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "tweet",
            data : {'description' : $('.tweet-content').val()},
            type : 'POST',
            dataType : 'json',
            success : function(data){
                $('.success-message').html(data.message);
                $('.alert-success').show();
                $('.tweet-content').val(null);
            },error:function(){
                $('.alert-danger').show();
            }
        });
        setTimeout(closeAlert, 4000);
    }
}