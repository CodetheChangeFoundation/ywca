<?php

class acf_field_button extends acf_field
{
	// vars
	var $settings,
			$defaults;
		
	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function __construct()
	{
		// vars
		$this->name = 'button';
		$this->label = __('Button');
		$this->category = __("Basic",'acf'); // Basic, Content, Choice, etc
		$this->defaults = array();
		
		// do not delete!
    parent::__construct();
    	
    	
    // settings
		$this->settings = array(
			'path' => apply_filters('acf/helpers/get_path', __FILE__),
			'dir' => apply_filters('acf/helpers/get_dir', __FILE__),
			'version' => '1.0.0'
		);

	}
	
	
	/*
	*  create_options()
	*
	*  Create extra options for your field. This is rendered when editing a field.
	*  The value of $field['name'] can be used (like bellow) to save extra data to the $field
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$field	- an array holding all the field's data
	*/
	
	function create_options( $field )
	{
		// defaults?
		$field = array_merge($this->defaults, $field);
		
		// key is needed in the field names to correctly save the data
		$key = $field['name'];
		
		
		// Create Field Options HTML
		
	}
	
	
	/*
	*  create_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field - an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function create_field( $field )
	{

		$field = array_merge($this->defaults, $field); 

		$field_name = esc_attr( $field['name'] );

		$use_internal = $field['value']['use_internal'] === 'false' ? false : true;
		$external_class = $use_internal ? 'hidden' : null;
		$internal_class = $use_internal ? null : 'hidden';
		$switch_text = $use_internal ? 'external' : 'internal';

		?>

		<table class="acf-button-fields">
			<tr>
				<td valign="top">
					<label>Text</label>
					<input type="text" value="<?php echo esc_attr( $field['value']['text'] ); ?>" id=""  name="<?php echo $field_name; ?>[text]" />
				</td>
				<td valign="top" class="external <?php echo $external_class; ?>">
					<label>External Link</label>
					<input type="text" value="<?php echo esc_attr( $field['value']['link'] ); ?>" id=""  name="<?php echo $field_name; ?>[link]" class="external" />
				</td>
				<td valign="top" class="internal <?php echo $internal_class; ?>">
					<label>Internal Link</label>
					<?php
					do_action('acf/create_field', array(
						'type' => 'post_object',
						'name' => $field_name . '[page_id]',
						'value' => $field['value']['page_id']
					)); ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p class="switch"><a href="">Switch to <span><?php echo $switch_text; ?></span> link</a></p>
					<input type="hidden" value="<?php echo $field['value']['use_internal']; ?>" name="<?php echo $field_name; ?>[use_internal]" class="use_internal" />
				</td>
			</tr>
		</table>

		<?php
	}
	
	
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add css + javascript to assist your create_field() action.
	*
	*  $info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function input_admin_enqueue_scripts()
	{
		// Note: This function can be removed if not used
		
		
		// register acf scripts
		wp_register_script( 'acf-input-button', $this->settings['dir'] . 'js/input.js', array('acf-input'), $this->settings['version'] );
		wp_register_style( 'acf-input-button', $this->settings['dir'] . 'css/input.css', array('acf-input'), $this->settings['version'] ); 
		
		
		// scripts
		wp_enqueue_script(array(
			'acf-input-button',	
		));

		// styles
		wp_enqueue_style(array(
			'acf-input-button',	
		));
		
		
	}
	
	/*
	*  format_value_for_api()
	*
	*  This filter is appied to the $value after it is loaded from the db and before it is passed back to the api functions such as the_field
	*
	*  @type	filter
	*  @since	3.6
	*  @date	23/01/13
	*
	*  @param	$value	- the value which was loaded from the database
	*  @param	$post_id - the $post_id from which the value was loaded
	*  @param	$field	- the field array holding all the field options
	*
	*  @return	$value	- the modified value
	*/
	
	function format_value_for_api( $value, $post_id, $field )
	{

		$field = array_merge($this->defaults, $field);
		$button = $value;
//		$field_name = esc_attr( $field['label'] );
		$field_name = preg_replace('/\s*/', '', $field['label']);
		// convert the string to all lowercase
		$classname = strtolower($field_name);

		$use_internal = $button['use_internal'] == 'true' ? true : false;

		$target = $use_internal ? null : ' target="_blank"';
		$link = $use_internal ? get_permalink($button['page_id']) : $button['link'];

		$value = '<a href="' . $link .'"' . $target . ' class="' . $classname . '">' . $button['text'] . '</a>';

		return $value;

	}
	
}

new acf_field_button();
