<?php

class Agencia_Social_Widget extends WP_Widget {

    public $fields = []; 

    public function __construct()
    {
        $this->fields = [   
        'credits' => __('Credits', 'agencia'), 
        'twitter' => 'Twitter', 
        'facebook' => 'Facebook', 
        'instagram' => 'Instagram', 
        'title' => __('Title', 'agencia')
        ]; 
        parent::__construct('agencia_social_widget', __('Social Widget', 'agencia')); 
    }

    public function widget($args, $instance) {
        echo $args['before_widget']; 
        if (isset($instance['title'])) {
            $title = apply_filters('widget_title', $instance['title']);
            echo $args['before_title'] . $title . $args['after_title']; 
        }
        $template = locate_template('template-parts/widgets/social.php'); 
        if (!empty($template)) {
            include($template); 
        }
        echo $args['after_widget']; 
    }

    public function form ($instance) {
        foreach($this->fields as $field => $label) {
            $value = $instance[$field] ?? ''; 
            ?>
            <p>
                <label for="<?= $this->get_field_id($field) ?>">
                <?= $label ?> 
                </label>
                <input type="text" class="widfat" name="<?= $this -> get_field_name($field) ?>" id="<?= $this->get_field_id($field) ?>" value="<?= esc_attr($value) ?>">
            </p>
            <?php
        } 
    }

    public function update($newInstance,  $oldInstance) {
        $output = []; 
        foreach($this->fields as $field => $label){
            $output[$field] = $newInstance[$field]; 
        }
        return $output; 
    }
}