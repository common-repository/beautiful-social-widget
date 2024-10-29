<?php
/*
Plugin Name: Beautiful Social Widget
Plugin URI: http://hellocoding.wordpress.com/2014/01/16/beautiful-social-widget-wordpress-plugin/
Description: This plugin provides the widget to show the link to your Social profile and make your Website more Social.
Version: 1.5
Author: Sudeep Acharya
Author URI: http://hellocoding.wordpress.com
Text Domain: beautiful-social-widget
License: GPL version v3 - http://www.gnu.org/licenses/gpl.html
 */

add_action('widgets_init', 'bsw_widget');

function bsw_widget()
{
    register_widget('beautiful_social_widget');
}


class beautiful_social_widget extends WP_Widget {

    function beautiful_social_widget() {
        $widget_ops = array('classname' => 'widget_beautiful_social_widget', 'description' => __('Displays the link to your Social profile with icon.') ); 
        $this->WP_Widget('beautiful_social_widget', __('Beautiful Social Widget'), $widget_ops);
    }
    function form($instance) {
        $instance = wp_parse_args( (array) $instance, array( 'title' => '', 'facebook' => '', 'twitter' => '', 'googleplus' => '', 'linkedin' => '', 'pinterest' => '',
         'youtube' => '', 'instagram' => '', 'tumblr' => '', 'flickr' => '', 'rssfeed' => '', 'email' => '') );
        $title = strip_tags($instance['title']);
        $facebook = strip_tags($instance['facebook']);
        $twitter = strip_tags($instance['twitter']);
        $googleplus = strip_tags($instance['googleplus']);
        $linkedin = strip_tags($instance['linkedin']);
        $pinterest = strip_tags($instance['pinterest']);
        $youtube = strip_tags($instance['youtube']);
        $instagram = strip_tags($instance['instagram']);
        $tumblr = strip_tags($instance['tumblr']);
        $flickr = strip_tags($instance['flickr']);
        $rssfeed = strip_tags($instance['rssfeed']);
        $email = strip_tags($instance['email']);

        ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __('Title'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php echo __('Facebook'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php echo __('Twitter'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php echo __('Google Plus'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="text" value="<?php echo esc_attr($googleplus); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php echo __('Linked In'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php echo __('Pinterest'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo esc_attr($pinterest); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('youtube'); ?>"><?php echo __('YouTube'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('instagram'); ?>"><?php echo __('Instagram'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('tumblr'); ?>"><?php echo __('Tumblr'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" type="text" value="<?php echo esc_attr($tumblr); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('flickr'); ?>"><?php echo __('Flickr'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" name="<?php echo $this->get_field_name('flickr'); ?>" type="text" value="<?php echo esc_attr($flickr); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('rssfeed'); ?>"><?php echo __('RSS Feed'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('rssfeed'); ?>" name="<?php echo $this->get_field_name('rssfeed'); ?>" type="text" value="<?php echo esc_attr($rssfeed); ?>" /></label></p>
        <p><label for="<?php echo $this->get_field_id('email'); ?>"><?php echo __('Email Address'); ?>: <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo esc_attr($email); ?>" /></label></p>       

        <?php
    }
 
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['facebook'] = strip_tags($new_instance['facebook']);
        $instance['twitter'] = strip_tags($new_instance['twitter']);
        $instance['googleplus'] = strip_tags($new_instance['googleplus']);
        $instance['linkedin'] = strip_tags($new_instance['linkedin']);
        $instance['pinterest'] = strip_tags($new_instance['pinterest']);
        $instance['youtube'] = strip_tags($new_instance['youtube']);
        $instance['instagram'] = strip_tags($new_instance['instagram']);
        $instance['tumblr'] = strip_tags($new_instance['tumblr']);
        $instance['flickr'] = strip_tags($new_instance['flickr']);
        $instance['rssfeed'] = strip_tags($new_instance['rssfeed']);
        $instance['email'] = strip_tags($new_instance['email']);
        
        return $instance;
    }
 
    function widget($args, $instance) {
        extract($args);
  
        $title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']);
        $facebook = empty($instance['facebook']) ? '' : $instance['facebook'];
        $twitter = empty($instance['twitter']) ? '' : $instance['twitter'];
        $googleplus = empty($instance['googleplus']) ? '' : $instance['googleplus'];
        $linkedin = empty($instance['linkedin']) ? '' : $instance['linkedin'];
        $pinterest = empty($instance['pinterest']) ? '' : $instance['pinterest'];
        $youtube = empty($instance['youtube']) ? '' : $instance['youtube'];
        $instagram = empty($instance['instagram']) ? '' : $instance['instagram'];
        $tumblr = empty($instance['tumblr']) ? '' : $instance['tumblr'];
        $flickr = empty($instance['flickr']) ? '' : $instance['flickr'];
        $rssfeed = empty($instance['rssfeed']) ? '' : $instance['rssfeed'];
        $email = empty($instance['email']) ? '' : $instance['email'];
        

        echo $before_widget;
        if (!empty( $title )) {
            echo $before_title . $title . $after_title;
        };

        
        echo '<div id="bsw-content">';
        if( $facebook ) echo '<a href="'. $facebook .'" target="_blank" id="bswfacebook" title="Facebook">Facebook</a>';
        if( $twitter ) echo '<a id="bswtwitter" href="'. $twitter .'" target="_blank" title="Twitter">Twitter</a>';
        if( $googleplus ) echo '<a id="bswgoogleplus" href="'. $googleplus .'" target="_blank" title="Google Plus">Google Plus</a>';
        if( $linkedin ) echo '<a id="bswlinkedin" href="'. $linkedin .'" target="_blank" title="Linked In">Linked In</a>';
        if( $pinterest ) echo '<a id="bswpinterest" href="'. $pinterest .'" target="_blank" title="Pinterest">Pinterest</a>';
        if( $youtube ) echo '<a id="bswyoutube" href="'. $youtube .'" target="_blank" title="YouTube">YouTube</a>';
        if( $instagram ) echo '<a id="bswinstagram" href="'. $instagram .'" target="_blank" title="Instagram">Instagram</a>';
        if( $tumblr ) echo '<a id="bswtumblr" href="'. $tumblr .'" target="_blank" title="Tumblr">Tumblr</a>';
        if( $flickr ) echo '<a id="bswflickr" href="'. $flickr .'" target="_blank" title="Flickr">Flickr</a>';
        if( $rssfeed ) echo '<a id="bswrssfeed" href="'. $rssfeed .'" target="_blank" title="RSS Feed">RSS Feed</a>';
        if( $email ) echo '<a id="bswemail" href="mailto:'. $email .'" target="_blank" title="Email">Email</a>';
        echo '</div>';
        
        echo $after_widget;
        wp_enqueue_style( 'bsw', plugins_url('bsw.css', __FILE__) );
    }
} 
?>
