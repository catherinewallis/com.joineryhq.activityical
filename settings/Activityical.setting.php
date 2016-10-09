<?php

return array(
  'activityical_group_id' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_group_id',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Only members of this CiviCRM group will have an activity iCalendar feed.',
    'title' =>  'Activity iCalendar Feed Group',
    'help_text' => '',
    'html_type' => 'Select',
    'html_attributes' => array(
      'size' => 10,
      'class' => 'crm-form-multiselect activityical-settings-select',
    ),
    'quick_form_type' => 'Element',
    'X_options_callback' => 'CRM_Activityical_Form_Settings::getGroupOptions',
  ),
  'activityical_activity_type_ids' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_activity_type_ids',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Select one more more options to limit the feed to the selected activity type(s); or select none to skip this limitation. (Use Ctrl+click to select or unselect multiple options.)',
    'title' =>  'Limit by Activity Type',
    'help_text' => '',
    'html_type' => 'Select',
    'html_attributes' => array(
      'multiple' => TRUE,
      'size' => 10,
      'class' => 'crm-form-multiselect activityical-settings-select',
    ),
    'quick_form_type' => 'Element',
    'X_options_callback' => 'CRM_Activityical_Form_Settings::getActivityTypeOptions',
  ),
  'activityical_description_append_targets' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_description_append_targets',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Append "with" contacts to Description?',
    'title' =>  'Description Includes "With"',
    'help_text' => '',
    'html_type' => '',
    'quick_form_type' => 'YesNo',
  ),
  'activityical_description_append_assignees' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_description_append_assignees',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Append other assigned contacts to Description?',
    'title' =>  'Description Includes Assignees',
    'help_text' => '',
    'html_type' => '',
    'quick_form_type' => 'YesNo',
  ),
  'activityical_cache_lifetime' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_cache_lifetime',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Maxiumum cache lifetime in minutes. Cached content will be refreshed if it is older than this number of minutes. Set to 0 to disable caching completely. (Bypass cache on a per-request basis by adding "nocache=1" to the feed URL.)',
    'title' =>  'Max Cache Lifetime',
    'help_text' => '',
    'html_type' => 'Text',
    'html_attributes' => array(),
    'quick_form_type' => 'Element',
    'default' => 1220, // 1220 minutes = 12 hours.
    'X_form_rules_args' => array(
      array('The field "Max cache lifetime" is required', 'required'),
      array('The field "Max cache lifetime" must be an integer', 'integer'),
    ),
  ),
  'activityical_past_days' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_past_days',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Maximum number of days in the past, before which no activities will be included in the feed. (Override this on a per-request basis by adding the "pdays=N" parameter to the feed URL; see README.md.)',
    'title' =>  'Past Days Limit',
    'help_text' => '',
    'html_type' => 'Text',
    'html_attributes' => array(),
    'quick_form_type' => 'Element',
    'default' => 30,
    'X_form_rules_args' => array(
      array('The field "Past days limit" is required.', 'required'),
      array('The field "Past days limit" must be an integer.', 'integer'),
    ),
  ),
  'activityical_future_days' => array(
    'group_name' => 'Activityical Settings',
    'group' => 'activityical',
    'name' => 'activityical_future_days',
    'type' => 'Int',
    'add' => '4.6',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Maximum number of days in the future, after which no activities will be included in the feed. (Override this on a per-request basis by adding the "fdays=N" parameter to the feed URL; see README.md.)',
    'title' =>  'Future Days Limit',
    'help_text' => '',
    'html_type' => 'Text',
    'html_attributes' => array(),
    'quick_form_type' => 'Element',
    'default' => 30,
    'X_form_rules_args' => array(
      array('The field "Future days limit" is required.', 'required'),
      array('The field "Future days limit" must be an integer.', 'integer'),
    ),
  ),
 );