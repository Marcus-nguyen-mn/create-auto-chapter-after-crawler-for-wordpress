<?php
// Create Chapter Stories
add_action('wp_ajax_mc_auto_create_chapter_have_crawler', 'mc_auto_create_chapter_have_crawler');
add_action('wp_ajax_nopriv_mc_auto_create_chapter_have_crawler', 'mc_auto_create_chapter_have_crawler');

function mc_auto_create_chapter_have_crawler(){
    $data_chap = [];
    $res = [
        'status' => false,
        'code' => 400
    ];
    $current_user_id = get_current_user_id();
    if ( isset( $_POST['data_chapter'] ) && is_array( $_POST['data_chapter'] ) ) {
        $data_chap = $_POST['data_chapter'];
        if ( isset( $data_chap['id_story_parents'] ) && $data_chap['id_story_parents'] ) {
            $story = get_post($data_chap['id_story_parents']);
            if($story && $story->post_type == "post"){
                if($current_user_id == $story->post_author){
                    $my_chapter = array(
                        'post_type' => 'story',
                        'post_title'    => wp_strip_all_tags( $data_chap['name_chapter'] ),
                        'post_content'  => $data_chap['content_chapter'],
                        'post_status'   => 'publish',
                        'post_name' => sanitize_title($data_chap['name_story_parents'].' '.$data_chap['name_chapter']),
                      );
                      
                      // Insert the post into the database
                      $chap_id = wp_insert_post( $my_chapter );
                      update_field( 'mc_story_parent_name',$data_chap['name_story_parents'] , $chap_id );
                        update_field( 'id_story_parent', $data_chap['id_story_parents'], $chap_id );
                        update_field( 'number_chapter_current', $data_chap['num_chapter_current'], $chap_id );
                        update_field( 'chapter_current_of_story', $data_chap['num_chapter_current'], $data_chap['id_story_parents'] );
                    $res['link_check'] =  get_permalink($chap_id);
                    $res['status'] =  true;
                    $res['code'] =  200;
                }
            }
        }
    }
    

    wp_send_json_success($res);
    die();
}