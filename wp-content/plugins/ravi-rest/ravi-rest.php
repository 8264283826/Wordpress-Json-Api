<?php
/**
*Plugin Name: Wordpress Rest Api Custom Plugin
*Plugin URL:http:/codeexios.com
*Description:Now this is wawousome plugin
*Version:0.1
*Author: Nayak Ravi
*Author URL:Ravi.com

**/

add_action('rest_api_init',function(){
	register_rest_route( 'wc/v3', 'posts', [
     'methods'=>'GET',
     'callback'=>'wp_custom_Api'
	] );
});

function wp_custom_Api(){
	// return "OUR TEST CUSTOME REST API";
    $args = [
     'namberposts'=>9999,
     'post_type'=>'post'
    ];
    $post= get_posts($args);
    $i=0;
    $data=[];

    foreach($post as $post){
    	$data[$i]['id']= $post->ID;
    	$data[$i]['title']= $post->post_title;
    	$data[$i]['content']=$post->post_content;
    	$data[$i]['date']=$post->post_date;
    	$date[$i]['slug']=$post->post_name;
    	$data[$i]['featured_image']['thumbnail']=get_the_post_thumbnail_url($post->ID,'thumbnail');
    	$data[$i]['featured_image']['mediam']=get_the_post_thumbnail_url($post->ID,'mediam');
    	$data[$i]['featured_image']['mediam_large']=get_the_post_thumbnail_url($post->ID,'large');

    	$i++;
    }
    return $data; 


};


?>