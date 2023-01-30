<?php

return [
    'custom_fields'		        => 'カスタムフィールド',
    'manage'                    => '管理',
    'field'		                => 'フィールド',
    'about_fieldsets_title'		=> 'フィールドセットについて',
    'about_fieldsets_text'		=> 'フィールドセットでは、特定の資産モデルタイプで頻繁に再利用されるカスタムフィールドのグループを作成することができます。',
    'custom_format'             => 'カスタム正規表現形式…',
    'encrypt_field'      	        => 'このフィールドの値をデータベースにて暗号化する',
    'encrypt_field_help'      => '警告: 暗号化フィールドは検索することができなくなります。',
    'encrypted'      	        => '暗号化',
    'fieldset'      	        => 'フィールドセット',
    'qty_fields'      	      => '数量フィールド',
    'fieldsets'      	        => 'フィールドセット',
    'fieldset_name'           => 'フィールドセット名',
    'field_name'              => 'フィールド名',
    'field_values'            => 'フィールド値',
    'field_values_help'       => '選択可能なオプションを1行に1つ追加します。最初の行以外の空白行は無視されます。',
    'field_element'           => 'フォームエレメント',
    'field_element_short'     => 'エレメント',
    'field_format'            => 'フォーマット',
    'field_custom_format'     => 'カスタム形式：',
    'field_custom_format_help'     => 'このフィールドでは、検証のために正規表現を使用できます。たとえば、カスタムフィールド値に有効なIMEI（15桁）が含まれていることを検証するには、<code>regex：/ ^ [0-9]{15} $ / </code>を使用します。',
    'required'   		          => '必須',
    'req'   		              => '必須',
    'used_by_models'   		    => '型番で使用',
    'order'   		            => '順番',
    'create_fieldset'         => '新しいフィールドセット',
    'create_fieldset_title' => '新しいフィールドセットを作成',
    'create_field'            => '新しいユーザー設定フィールド',
    'create_field_title' => '新しいカスタムフィールドを作成',
    'value_encrypted'      	        => 'このフィールドの値は、データベースで暗号化されます。管理者ユーザーのみが復号化された値を表示することができます。',
    'show_in_email'     => 'このフィールドの値を、ユーザーに送信されるチェックアウト メールに含めますか？（暗号化されたフィールドの値はメールに含めることはできません。）',
    'help_text' => 'ヘルプ テキスト',
    'help_text_description' => 'このテキストは、資産の編集中にフォーム要素の下に表示されるオプションのテキストです。',
    'about_custom_fields_title' => 'カスタムフィールドについて',
    'about_custom_fields_text' => 'カスタムフィールドでは、任意の属性を資産に追加できます。',
    'add_field_to_fieldset' => 'フィールドセットにフィールドを追加',
    'make_optional' => '必須 - クリックでオプションに変更',
    'make_required' => 'オプション - クリックで必須にします',
    'reorder' => '並べ替え',
    'db_field' => 'DBフィールド',
    'db_convert_warning' => '警告。このフィールドは <code>:db_column</code> としてカスタムフィールドテーブルにありますが、 <code>:expected</code> でなければなりません。',
    'is_unique' => 'この値はすべての資産で一意である必要があります',
    'unique' => '一意',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
];
