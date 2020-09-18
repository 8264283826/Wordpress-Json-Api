jQuery(function(){
    jQuery('#example').DataTable();
  


jQuery('#frmCreateNewWpPost').on('submit',function(){
  
    //create nonce value
    jQuery.post(ajaxurl+"/api/get_nonce/?controller=posts&method=create_post",function(response){
      var nonce = response.nonce;
      
       var frmdata = "nonce="+nonce+"&"+jQuery('#frmCreateNewWpPost').serialize()+"&status=publish";
     

      jQuery.post(ajaxurl+"/api/posts/create_post/",frmdata, function(response){
        alert("Post  has create successfullay");
        setTimeout(function(){
        	location.reload();
        },1200);
      });
    });
   });


//Delete post Start
    
    jQuery(document).on("click",".post-delete", function(){
       var dataid  = jQuery(this).attr('data-id');
       var conf = confirm("Are you sure went to detele?");
       if(conf){
      
       jQuery.post(ajaxurl + "/api/get_nonce/?controller=posts&method=delete_post", function(response){
       	var nonce = response.nonce;
       	var postdata = "id=" + dataid +"&nonce=" + nonce;
       	jQuery.post(ajaxurl+"/api/posts/delete_post/",postdata, function(response){
         alert("post has been  delete");
         setTimeout(function(){
         	location.reload();
         },1200);
       	});
      });
    }
});

//Delete post end



//eddit post start
jQuery(document).on("click",".post-edit", function(){
	var title = jQuery(this).parents("tr").find("td:nth(1)").text();
	var desc = jQuery(this).parents("tr").find("td:nth(2)").text();
	jQuery("#postEdit #title_edit").val(title);
	jQuery("#postEdit #description_edit").val(desc);
	 jQuery("#post-id").val(jQuery(this).attr('data-id'));
    
});

jQuery("#frmEditPost").on("submit",function(){
	var frmdata = jQuery(this).serialize();
   var nonce_param = "controller=posts&method=update_post";
	jQuery.post(ajaxurl+"/api/get_nonce/",nonce_param, function(response){
    var nonce = response.nonce;
   frmdata += "&nonce="+nonce;
  
   jQuery.post(ajaxurl+"/api/posts/update_post/",frmdata,function(response){
      alert("Update post successfully");
      setTimeout(function(){
      	location.reload();
      },1200);
   });
	});
});
//edit post end

    load_wp_posts();
 });


//index post start
function load_wp_posts(){
  jQuery.post(ajaxurl+"/api/get_posts/",function(response){
     var posts = response.posts;
     var html = "";
     jQuery.each(posts,function(index,post){
     	html += '<tr><td>'+(index+1)+'</td><td>'+post.title+'</td><td>'+post.content+'</td><td>'+post.slug+'</td><td>publish</td><td><a class="btn btn-info post-edit" href="javascript:void(0)" data-toggle="modal" data-target="#postEdit" data-id="'+post.id+'">Edit</a><a class="btn btn-danger post-delete" href="javascript:void(0) data-toggle="modal" data-target="#postDelete" data-id="'+post.id+'">Delete</a></td></tr>';
     });
     jQuery("#table-data").html(html);
  });
}

//index post close
