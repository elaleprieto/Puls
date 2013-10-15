<?php
/**
*
* acp_profile [Russian]
*
* @package language
* @version $Id$
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
exit;
}

if (empty($lang) || !is_array($lang))
{
$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'		=> 'Дополнительное поле успешно добавлено в профиль.',
	'ALPHA_ONLY'				=> 'Только буквенно-цифровые',
	'ALPHA_SPACERS'				=> 'Только буквенно-цифровые и разделители',
	'ALWAYS_TODAY'				=> 'Всегда текущая дата',

	'BOOL_ENTRIES_EXPLAIN'		=> 'Введите возможные варианты',
	'BOOL_TYPE_EXPLAIN'			=> 'Вид вариантов выбора: флажки или переключатели. Флажки будут отображены только в случае, если они помечены для данного пользователя. В этом случае будет испльзована <strong>вторая</strong> языковая опция. Переключатели будут отображены независимо от их состояния.',

	'CHANGED_PROFILE_FIELD'			=> 'Поле профиля успешно изменено.',
	'CHARS_ANY'						=> 'Любые',
	'CHECKBOX'						=> 'Флажки',
	'COLUMNS'						=> 'столбцов',
	'CP_LANG_DEFAULT_VALUE'			=> 'Значение по умолчанию',
	'CP_LANG_EXPLAIN'				=> 'Описание поля',
	'CP_LANG_EXPLAIN_EXPLAIN'		=> 'Подсказка к полю, показываемая пользователю',
	'CP_LANG_NAME'					=> 'Имя поля/заголовок, показываемый пользователю',
	'CP_LANG_OPTIONS'				=> 'Варианты',
	'CREATE_NEW_FIELD'				=> 'Добавить новое поле',
	'CUSTOM_FIELDS_NOT_TRANSLATED'		=> 'По крайней мере одно дополнительное поле профиля пока не переведено. Введите необходимые данные, перейдя по ссылке «Перевести».',

	'DEFAULT_ISO_LANGUAGE'				=> 'Язык по умолчанию [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'		=> 'Для поля профиля не заполнены переменные языка по умолчанию.',
	'DEFAULT_VALUE'						=> 'Значение по умолчанию',
	'DELETE_PROFILE_FIELD'				=> 'Удаление поля профиля',
	'DELETE_PROFILE_FIELD_CONFIRM'		=> 'Вы уверены, что хотите удалить это поле?',
	'DISPLAY_AT_PROFILE'				=> 'В центре пользователя',
	'DISPLAY_AT_PROFILE_EXPLAIN'		=> 'Пользователь может изменить значение поля в центре пользователя.',
	'DISPLAY_AT_REGISTER'				=> 'Отображать при регистрации',
	'DISPLAY_AT_REGISTER_EXPLAIN'		=> 'Если опция включена, поле будет отображаться при регистрации.',
	'DISPLAY_ON_VT'						=> 'Отображать на страницах тем',
	'DISPLAY_ON_VT_EXPLAIN'				=> 'При включении данной опции поле будет отображаться на страницах тем под аватарами пользователей.',
    'DISPLAY_PROFILE_FIELD'            	=> 'Отображать для всех поле профиля',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'		=> 'Поле профиля будет отобажаться при условии, что это будет разрешено настройками нагрузки сервера. Если установлено значение «Нет», данное поле будет скрыто при просмотре тем, профилей и списка пользователей.',
	'DROPDOWN_ENTRIES_EXPLAIN'			=> 'Введите варианты ответа, по одному ответу на строку',

	'EDIT_DROPDOWN_LANG_EXPLAIN'		=> 'Учтите, что Вы можете изменять текст вариантов выбора и добавлять новые варианты в конец списка. Не рекомендуется добавлять новые варианты между существующими, это может привести к тому, что в профилях пользователей окажутся другие варианты выбора. Это также может произойти, если Вы удалите варианты из середины списка. Удаление варианта из конца списка приведет к тому, у пользователей, выбравших в профиле этот вариант, он сменится на вариант по умолчанию.',
	'EMPTY_FIELD_IDENT'					=> 'Вы не ввели идентификатор поля',
	'EMPTY_USER_FIELD_NAME'				=> 'Введите имя поля/заголовок',
	'ENTRIES'							=> 'Значения',
	'EVERYTHING_OK'						=> 'Все в порядке',

	'FIELD_BOOL'					=> 'Логическое поле (Да/нет)',
	'FIELD_DATE'					=> 'Дата',
	'FIELD_DESCRIPTION'				=> 'Описание поля',
	'FIELD_DESCRIPTION_EXPLAIN'		=> 'Подсказка к полю, показываемая пользователю',
	'FIELD_DROPDOWN'				=> 'Выпадающий список',
	'FIELD_IDENT'					=> 'Идентификатор поля',
	'FIELD_IDENT_ALREADY_EXIST'		=> 'Поле с таким идентификатором уже существует. Пожалуйста, выберите другой идентификатор.',
	'FIELD_IDENT_EXPLAIN'			=> 'Название поля для его обозначения в базе данных и файлах шаблонов.',
	'FIELD_INT'						=> 'Число',
	'FIELD_LENGTH'					=> 'Размер поля ввода',
	'FIELD_NOT_FOUND'				=> 'Поле не найдено.',
	'FIELD_STRING'					=> 'Однострочное текстовое поле',
	'FIELD_TEXT'					=> 'Многострочное текстовое поле',
	'FIELD_TYPE'					=> 'Тип поля',
	'FIELD_TYPE_EXPLAIN'			=> 'Вы не сможете изменять тип поля.',
	'FIELD_VALIDATION'				=> 'Допустимые символы',
	'FIRST_OPTION'					=> 'Первый вариант',

	'HIDE_PROFILE_FIELD'				=> 'Скрытое поле',
	'HIDE_PROFILE_FIELD_EXPLAIN'		=> 'Скрывает поле профиля от остальных пользователей, кроме пользователя, администраторов и модераторов. Если данная опция заблокирована в пользовательской панели управления, пользователь не может ее использовать. Она доступна только администратору.',

	'INVALID_CHARS_FIELD_IDENT'		=> 'Идентификатор поля может содержать только латинские строчные буквы и _ (символ нижнего подчеркивания)',
	'INVALID_FIELD_IDENT_LEN'		=> 'Идентификатор поля может быть длиной не более 17 символов',
	'ISO_LANGUAGE'					=> 'Язык [%s]',

	'LANG_SPECIFIC_OPTIONS'			=> 'Настройки для языка [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'			=> 'Максимальное число символов',
	'MAX_FIELD_NUMBER'			=> 'Максимально допустимое число',
	'MIN_FIELD_CHARS'			=> 'Минимальное число символов',
	'MIN_FIELD_NUMBER'			=> 'Минимально допустимое число',

	'NO_FIELD_ENTRIES'				=> 'Не заданы возможные варианты выбора',
	'NO_FIELD_ID'					=> 'Не указан идентификационный номер поля.',
	'NO_FIELD_TYPE'					=> 'Не указан тип поля.',
	'NO_VALUE_OPTION'				=> 'Незначащий вариант',
	'NO_VALUE_OPTION_EXPLAIN'		=> 'Если поле обязательно к заполнению и выбран этот вариант, пользователю выводится сообщение об ошибке',
	'NUMBERS_ONLY'					=> 'Только цифры (0-9)',

	'PROFILE_BASIC_OPTIONS'			=> 'Основные настройки',
	'PROFILE_FIELD_ACTIVATED'		=> 'Поле профиля успешно активировано.',
	'PROFILE_FIELD_DEACTIVATED'		=> 'Поле профиля успешно деактивировано.',
	'PROFILE_LANG_OPTIONS'			=> 'Языковые настройки',
	'PROFILE_TYPE_OPTIONS'			=> 'Настройки вида поля',

	'RADIO_BUTTONS'					=> 'Переключатели',
	'REMOVED_PROFILE_FIELD'			=> 'Поле профиля успешно удалено.',
	'REQUIRED_FIELD'				=> 'Обязательное поле',
	'REQUIRED_FIELD_EXPLAIN'		=> 'Пользователь или администратор должен заполнить или выставить значение поля. Если поле не будет доступно при регистрации, оно будет доступно только в профиле.',
	'ROWS'							=> 'строк',

	'SAVE'								=> 'Сохранить',
	'SECOND_OPTION'						=> 'Второй вариант',
	'SHOW_NOVALUE_FIELD'				=> 'Отображать поле, если значение не было выбрано',
	'SHOW_NOVALUE_FIELD_EXPLAIN'		=> 'Определяет, будет ли отображаться поле профиля, если не было выбрано значение для необязательного либо обязательного поля.',
	'STEP_1_EXPLAIN_CREATE'				=> 'Здесь Вы можете ввести основные параметры нового поля профиля. Эта информация нужна для второго шага, на котором Вы сможете установить оставшиеся настройки, сделать предварительный просмотр будущего поля и внести необходимые исправления, если необходимо.',
	'STEP_1_EXPLAIN_EDIT'				=> 'Здесь Вы можете изменить основные параметры нового поля профиля. На втором шаге соответствующие значения будут пересчитаны и Вы сможете просмотреть и протестировать измененные настройки.',
	'STEP_1_TITLE_CREATE'				=> 'Добавление поля в профиль',
	'STEP_1_TITLE_EDIT'					=> 'Редактирование поля профиля',
	'STEP_2_EXPLAIN_CREATE'				=> 'Здесь Вы можете задать общие настройки будущего поля. Затем можно будет посмотреть, как будет выглядеть для пользователя созданное поле. Поиграйте с настройками, пока не будете удовлетворены тем, как работает поле.',
	'STEP_2_EXPLAIN_EDIT'				=> 'Здесь Вы можете изменить общие настройки будущего поля. <br /><strong>Учтите, что эти изменения не повлияют на уже существующие поля профиля, заполненные пользователями.</strong>',
	'STEP_2_TITLE_CREATE'				=> 'Настройки вида поля',
	'STEP_2_TITLE_EDIT'					=> 'Настройки вида поля',
	'STEP_3_EXPLAIN_CREATE'				=> 'Так как на форуме установлено более одного языка, необходимо ввести данные для остальных языков. Название поля, подсказка и начальное значение будут отображаться на языке по умолчанию. Языковые переменные других языков можно будет ввести позднее.',
	'STEP_3_EXPLAIN_EDIT'				=> 'Так как на форуме установлено более одного языка, Вы можете изменить или добавить данные для остальных языков. Название поля, подсказка и начальное значение будут отображаться на языке по умолчаниюУ.',
	'STEP_3_TITLE_CREATE'				=> 'Языковые переменные других языков',
	'STEP_3_TITLE_EDIT'					=> 'Языковые определения',
	'STRING_DEFAULT_VALUE_EXPLAIN'		=> 'Введите строку, по умолчанию отображаемую в поле. Не вводите строку, если хотите оставить поле пустым.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'		=> 'Введите текст, по умолчанию отображаемый в поле. Не вводите текст, если хотите оставить поле пустым.',
	'TRANSLATE'							=> 'Перевести',

	'USER_FIELD_NAME'		=> 'Имя поля/заголовок, показываемый пользователю',

	'VISIBILITY_OPTION'					=> 'Видимость полей',
));

?>