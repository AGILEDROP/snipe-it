<?php

return [
    'custom_fields'		        => 'Vlastní pole',
    'manage'                    => 'Spravovat',
    'field'		                => 'Pole',
    'about_fieldsets_title'		=> 'O sadách polí',
    'about_fieldsets_text'		=> 'Fieldsets allow you to create groups of custom fields that are frequently re-used for specific asset model types.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Zašifrovat hodnotu tohoto pole v databázi',
    'encrypt_field_help'      => 'UPOZORNĚNÍ: Šifrování pole je udělá nevyhledatelné.',
    'encrypted'      	        => 'Šifrováno',
    'fieldset'      	        => 'Sada',
    'qty_fields'      	      => 'Počet',
    'fieldsets'      	        => 'Sady',
    'fieldset_name'           => 'Název sady',
    'field_name'              => 'Název pole',
    'field_values'            => 'Hodnota',
    'field_values_help'       => 'Přidat možnosti výběru, jedna možnost na řádek. Prázdné řádky jiné než první řádek budou ignorovány.',
    'field_element'           => 'Typ pole',
    'field_element_short'     => 'Typ',
    'field_format'            => 'Formát',
    'field_custom_format'     => 'Vlastní formát',
    'field_custom_format_help'     => 'Toto pole umožňuje použít pro validaci regulární výrazy. Mělo by začínat slovem "regex:" - například pro ověření, že zadaná hodnota pole obsahuje platný IMEI (15 číslic), použijte <code>regex:/^[0-9]{15}$/</code>.',
    'required'   		          => 'Povinné',
    'req'   		              => 'Pov.',
    'used_by_models'   		    => 'Užito u modelů',
    'order'   		            => 'Pořadí',
    'create_fieldset'         => 'Nová sada',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Nové vlastní pole',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Hodnota tohoto pole je zašifrována v databázi. Pouze administrátoři budou moci zobrazit dešifrovanou hodnotu',
    'show_in_email'     => 'Zahrnout hodnotu této kolonky do e-mailu o vyskladnění pro uživatele? Šifrované kolonky nemohou být součástí e-mailů.',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unikátní',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
];
