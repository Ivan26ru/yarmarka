<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Социальная сеть");
?><?$APPLICATION->IncludeComponent(
	"bitrix:socialnetwork",
	"",
	Array(
		"ALLOW_POST_MOVE" => "N",
		"ALLOW_RATING_SORT" => "N",
		"BLOG_ALLOW_POST_CODE" => "Y",
		"BLOG_COMMENT_AJAX_POST" => "N",
		"BLOG_COMMENT_ALLOW_IMAGE_UPLOAD" => "A",
		"BLOG_COMMENT_ALLOW_VIDEO" => "Y",
		"BLOG_GROUP_ID" => "1",
		"BLOG_IMAGE_MAX_HEIGHT" => "600",
		"BLOG_IMAGE_MAX_WIDTH" => "600",
		"BLOG_NO_URL_IN_COMMENTS" => "",
		"BLOG_NO_URL_IN_COMMENTS_AUTHORITY" => "",
		"BLOG_SHOW_SPAM" => "N",
		"BLOG_USE_CUT" => "N",
		"BLOG_USE_GOOGLE_CODE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TIME_LONG" => "604800",
		"CACHE_TYPE" => "A",
		"CAN_OWNER_EDIT_DESKTOP" => "Y",
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
		"EDITABLE_FIELDS" => array("LOGIN","NAME","SECOND_NAME","LAST_NAME","EMAIL","PERSONAL_BIRTHDAY","PERSONAL_WWW","PERSONAL_ICQ","PERSONAL_GENDER","PERSONAL_PHOTO","PERSONAL_PHONE","PERSONAL_FAX","PERSONAL_MOBILE","PERSONAL_PAGER","PERSONAL_COUNTRY","PERSONAL_STATE","PERSONAL_CITY","PERSONAL_ZIP","PERSONAL_STREET","PERSONAL_MAILBOX"),
		"FORUM_AJAX_POST" => "N",
		"FORUM_ID" => "1",
		"FORUM_THEME" => "blue",
		"GROUP_PROPERTY" => array(),
		"GROUP_USE_BAN" => "Y",
		"GROUP_USE_KEYWORDS" => "Y",
		"ITEM_DETAIL_COUNT" => "32",
		"ITEM_MAIN_COUNT" => "6",
		"LOG_AUTH" => "N",
		"LOG_COMMENT_THUMBNAIL_SIZE" => "",
		"LOG_PHOTO_COUNT" => "6",
		"LOG_PHOTO_THUMBNAIL_SIZE" => "48",
		"LOG_RSS_TTL" => "60",
		"LOG_SUBSCRIBE_ONLY" => "N",
		"LOG_THUMBNAIL_SIZE" => "",
		"NAME_TEMPLATE" => "",
		"PATH_TO_BLOG_SMILE" => "/bitrix/images/blog/smile/",
		"PATH_TO_SEARCH_EXTERNAL" => "",
		"PATH_TO_SMILE" => "/bitrix/images/socialnetwork/smile/",
		"PHOTO_ALBUM_PHOTO_THUMBS_SIZE" => "120",
		"PHOTO_ELEMENTS_PAGE_ELEMENTS" => "50",
		"PHOTO_GROUP_IBLOCK_ID" => "8",
		"PHOTO_GROUP_IBLOCK_TYPE" => "photos",
		"PHOTO_MODERATION" => "N",
		"PHOTO_ORIGINAL_SIZE" => "1280",
		"PHOTO_PATH_TO_FONT" => "",
		"PHOTO_SECTION_PAGE_ELEMENTS" => "15",
		"PHOTO_SHOW_WATERMARK" => "Y",
		"PHOTO_THUMBNAIL_SIZE" => "100",
		"PHOTO_UPLOAD_MAX_FILESIZE" => "100",
		"PHOTO_USER_IBLOCK_ID" => "8",
		"PHOTO_USER_IBLOCK_TYPE" => "photos",
		"PHOTO_USE_COMMENTS" => "N",
		"PHOTO_USE_RATING" => "N",
		"PHOTO_WATERMARK_MIN_PICTURE_SIZE" => "400",
		"PHOTO_WATERMARK_RULES" => "USER",
		"RATING_ID" => array(),
		"RATING_TYPE" => "",
		"SEARCH_DEFAULT_SORT" => "rank",
		"SEARCH_FILTER_DATE_NAME" => "sonet_search_filter_date",
		"SEARCH_FILTER_NAME" => "sonet_search_filter",
		"SEARCH_PAGE_RESULT_COUNT" => "10",
		"SEARCH_RESTART" => "N",
		"SEARCH_TAGS_COLOR_NEW" => "3E74E6",
		"SEARCH_TAGS_COLOR_OLD" => "C0C0C0",
		"SEARCH_TAGS_FONT_MAX" => "50",
		"SEARCH_TAGS_FONT_MIN" => "10",
		"SEARCH_TAGS_PAGE_ELEMENTS" => "100",
		"SEARCH_TAGS_PERIOD" => "",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEF_FOLDER" => "/blog/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("activity"=>"user/#user_id#/activity/","bizproc"=>"bizproc/","bizproc_edit"=>"bizproc/#task_id#/","group"=>"group/#group_id#/","group_ban"=>"group/#group_id#/ban/","group_blog"=>"group/#group_id#/blog/","group_blog_draft"=>"group/#group_id#/blog/draft/","group_blog_moderation"=>"group/#group_id#/blog/moderation/","group_blog_post"=>"group/#group_id#/blog/#post_id#/","group_blog_post_edit"=>"group/#group_id#/blog/edit/#post_id#/","group_blog_rss"=>"group/#group_id#/blog/rss/#type#/","group_calendar"=>"group/#group_id#/calendar/","group_content_search"=>"group/#group_id#/search/","group_create"=>"user/#user_id#/groups/create/","group_delete"=>"group/#group_id#/delete/","group_edit"=>"group/#group_id#/edit/","group_features"=>"group/#group_id#/features/","group_files"=>"group/#group_id#/files/#path#","group_forum"=>"group/#group_id#/forum/","group_forum_topic"=>"group/#group_id#/forum/#topic_id#/","group_forum_topic_edit"=>"group/#group_id#/forum/edit/#topic_id#/","group_log"=>"group/#group_id#/log/","group_mods"=>"group/#group_id#/moderators/","group_photo"=>"group/#group_id#/photo/","group_request_group_search"=>"group/#user_id#/group_search/","group_request_search"=>"group/#group_id#/user_search/","group_request_user"=>"group/#group_id#/user/#user_id#/request/","group_requests"=>"group/#group_id#/requests/","group_requests_out"=>"group/#group_id#/requests_out/","group_search"=>"group/search/","group_search_subject"=>"group/search/#subject_id#/","group_subscribe"=>"group/#group_id#/subscribe/","group_users"=>"group/#group_id#/users/","index"=>"index.php","log"=>"log/","message_form"=>"messages/form/#user_id#/","message_form_mess"=>"messages/chat/#user_id#/#message_id#/","messages_chat"=>"messages/chat/#user_id#/","messages_input"=>"messages/input/","messages_input_user"=>"messages/input/#user_id#/","messages_output"=>"messages/output/","messages_output_user"=>"messages/output/#user_id#/","messages_users"=>"messages/","messages_users_messages"=>"messages/#user_id#/","reindex"=>"reindex.php","search"=>"search.php","subscribe"=>"subscribe/","user"=>"user/#user_id#/","user_ban"=>"messages/ban/","user_blog"=>"user/#user_id#/blog/","user_blog_draft"=>"user/#user_id#/blog/draft/","user_blog_moderation"=>"user/#user_id#/blog/moderation/","user_blog_post"=>"user/#user_id#/blog/#post_id#/","user_blog_post_edit"=>"user/#user_id#/blog/edit/#post_id#/","user_blog_rss"=>"user/#user_id#/blog/rss/#type#/","user_calendar"=>"user/#user_id#/calendar/","user_content_search"=>"user/#user_id#/search/","user_features"=>"user/#user_id#/features/","user_files"=>"user/#user_id#/files/lib/#path#","user_forum"=>"user/#user_id#/forum/","user_forum_topic"=>"user/#user_id#/forum/#topic_id#/","user_forum_topic_edit"=>"user/#user_id#/forum/edit/#topic_id#/","user_friends"=>"user/#user_id#/friends/","user_friends_add"=>"user/#user_id#/friends/add/","user_friends_delete"=>"user/#user_id#/friends/delete/","user_groups"=>"user/#user_id#/groups/","user_groups_add"=>"user/#user_id#/groups/add/","user_leave_group"=>"group/#group_id#/user_leave/","user_photo"=>"user/#user_id#/photo/","user_profile_edit"=>"user/#user_id#/edit/","user_request_group"=>"group/#group_id#/user_request/","user_settings_edit"=>"user/#user_id#/settings/","user_subscribe"=>"user/#user_id#/subscribe/","video_call"=>"video/#user_id#/"),
		"SET_NAV_CHAIN" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_LOGIN" => "Y",
		"SHOW_RATING" => "",
		"SHOW_VOTE" => "N",
		"SHOW_YEAR" => "Y",
		"SM_THEME" => "grey",
		"SONET_USER_FIELDS_LIST" => array("PERSONAL_BIRTHDAY","PERSONAL_GENDER","PERSONAL_CITY"),
		"SONET_USER_FIELDS_SEARCHABLE" => array("LOGIN","NAME","SECOND_NAME","LAST_NAME","PERSONAL_BIRTHDAY","PERSONAL_BIRTHDAY_YEAR","PERSONAL_BIRTHDAY_DAY","PERSONAL_PROFESSION","PERSONAL_GENDER","PERSONAL_COUNTRY","PERSONAL_STATE","PERSONAL_CITY","PERSONAL_ZIP","PERSONAL_STREET","PERSONAL_MAILBOX","WORK_COMPANY","WORK_DEPARTMENT","WORK_POSITION","WORK_COUNTRY","WORK_STATE","WORK_CITY","WORK_ZIP","WORK_STREET","WORK_MAILBOX"),
		"SONET_USER_PROPERTY_LIST" => array(),
		"SONET_USER_PROPERTY_SEARCHABLE" => array(),
		"USER_FIELDS_CONTACT" => array(),
		"USER_FIELDS_FORUM" => array(),
		"USER_FIELDS_MAIN" => array(),
		"USER_FIELDS_PERSONAL" => array(),
		"USER_FIELDS_SEARCH_ADV" => array("PERSONAL_GENDER","PERSONAL_COUNTRY","PERSONAL_CITY"),
		"USER_FIELDS_SEARCH_SIMPLE" => array("PERSONAL_GENDER","PERSONAL_CITY"),
		"USER_PROPERTIES_SEARCH_ADV" => array(),
		"USER_PROPERTIES_SEARCH_SIMPLE" => array(),
		"USER_PROPERTY_CONTACT" => array(),
		"USER_PROPERTY_MAIN" => array(),
		"USER_PROPERTY_PERSONAL" => array(),
		"USE_MAIN_MENU" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>