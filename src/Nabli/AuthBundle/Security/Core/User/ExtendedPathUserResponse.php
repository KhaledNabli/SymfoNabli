<?php


namespace Nabli\AuthBundle\Security\Core\User;
use HWI\Bundle\OAuthBundle\OAuth\Response\PathUserResponse;



class ExtendedPathUserResponse extends PathUserResponse {
	
	/**
     * @var array
     */
	protected $paths = array(
		'identifier'     => null,
		'nickname'       => null,
		'realname'       => null,
		'email'          => null,
		'profilepicture' => null,
		'profilelink'	 => null,
		'firstname' 	 => null,
		'lastname'		 => null,
		'gender' 	     => null,
		'age_group'	     => null,
		'locale' 	     => null,
		'timezone'	     => null,
		'verified'		 => null,
		);



	public function getProfileLink() {
		return $this->getValueForPath('profilelink');
	}

	public function getFirstName() {
		return $this->getValueForPath('firstname');
	}

	public function getLastName() {
		return $this->getValueForPath('lastname');
	}

	public function getGender() {
		return $this->getValueForPath('gender');
	}

	public function getAgeGroup() {
		return $this->getValueForPath('age_group');
	}

	public function getLocale() {
		return $this->getValueForPath('locale');
	}

	public function getTimezone() {
		return $this->getValueForPath('timezone');
	}

	public function isVerified() {
		return $this->getValueForPath('verified');
	}


// Google:   {"id":"106058419701836407247","email":"khanab77@googlemail.com","verified_email":true,"name":"Khaled Nabli","given_name":"Khaled","family_name":"Nabli","link":"https:\/\/plus.google.com\/106058419701836407247","picture":"https:\/\/lh5.googleusercontent.com\/-oCm3Ga9dYHI\/AAAAAAAAAAI\/AAAAAAAAAu4\/AzhHWU2xTn4\/photo.jpg","locale":"en"}
// Facebook: {"id":"343644305796150","first_name":"Klaus","gender":"female","last_name":"Entwickler","link":"https:\/\/www.facebook.com\/app_scoped_user_id\/343644305796150\/","locale":"de_DE","name":"Klaus Entwickler","timezone":2,"updated_time":"2014-10-20T17:23:12+0000","verified":true}
// Twitter:  {"id":285353386,"id_str":"285353386","name":"Khaled Nabli","screen_name":"KhaledN4BL1","location":"Europe","profile_location":null,"description":"Integrated Marketing Management | Cutting Edge Solution Architectures | Photograph... All opinions are my own and not those of any organization.","url":"https:\/\/t.co\/Kq8QF41oCH","entities":{"url":{"urls":[{"url":"https:\/\/t.co\/Kq8QF41oCH","expanded_url":"https:\/\/plus.google.com\/106058419701836407247","display_url":"plus.google.com\/10605841970183\u2026","indices":[0,23]}]},"description":{"urls":[]}},"protected":false,"followers_count":54,"friends_count":164,"listed_count":3,"created_at":"Thu Apr 21 00:41:38 +0000 2011","favourites_count":1,"utc_offset":3600,"time_zone":"Amsterdam","geo_enabled":true,"verified":false,"statuses_count":85,"lang":"de","status":{"created_at":"Mon Oct 27 12:33:03 +0000 2014","id":5.2671318502254e+17,"id_str":"526713185022537728","text":"RT @RolandMag66: Teradata-Kunden bevorzugen On-Premise http:\/\/t.co\/njE6p8Sa5a via @COMPUTERWOCHE","source":"<a href=\"http:\/\/twitter.com\" rel=\"nofollow\">Twitter Web Client<\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweeted_status":{"created_at":"Mon Oct 27 11:56:15 +0000 2014","id":5.2670392300067e+17,"id_str":"526703923000668161","text":"Teradata-Kunden bevorzugen On-Premise http:\/\/t.co\/njE6p8Sa5a via @COMPUTERWOCHE","source":"<a href=\"https:\/\/dev.twitter.com\/docs\/tfw\" rel=\"nofollow\">Twitter for Websites<\/a>","truncated":false,"in_reply_to_status_id":null,"in_reply_to_status_id_str":null,"in_reply_to_user_id":null,"in_reply_to_user_id_str":null,"in_reply_to_screen_name":null,"geo":null,"coordinates":null,"place":null,"contributors":null,"retweet_count":1,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"urls":[{"url":"http:\/\/t.co\/njE6p8Sa5a","expanded_url":"http:\/\/www.cowo.de\/a\/3070001","display_url":"cowo.de\/a\/3070001","indices":[38,60]}],"user_mentions":[{"screen_name":"COMPUTERWOCHE","name":"COMPUTERWOCHE","id":14351010,"id_str":"14351010","indices":[65,79]}]},"favorited":false,"retweeted":true,"possibly_sensitive":false,"lang":"de"},"retweet_count":1,"favorite_count":0,"entities":{"hashtags":[],"symbols":[],"urls":[{"url":"http:\/\/t.co\/njE6p8Sa5a","expanded_url":"http:\/\/www.cowo.de\/a\/3070001","display_url":"cowo.de\/a\/3070001","indices":[55,77]}],"user_mentions":[{"screen_name":"RolandMag66","name":"Roland Magon","id":143451610,"id_str":"143451610","indices":[3,15]},{"screen_name":"COMPUTERWOCHE","name":"COMPUTERWOCHE","id":14351010,"id_str":"14351010","indices":[82,96]}]},"favorited":false,"retweeted":true,"possibly_sensitive":false,"lang":"de"},"contributors_enabled":false,"is_translator":false,"is_translation_enabled":false,"profile_background_color":"000000","profile_background_image_url":"http:\/\/abs.twimg.com\/images\/themes\/theme15\/bg.png","profile_background_image_url_https":"https:\/\/abs.twimg.com\/images\/themes\/theme15\/bg.png","profile_background_tile":false,"profile_image_url":"http:\/\/pbs.twimg.com\/profile_images\/511848845945217027\/hknkeRjD_normal.jpeg","profile_image_url_https":"https:\/\/pbs.twimg.com\/profile_images\/511848845945217027\/hknkeRjD_normal.jpeg","profile_banner_url":"https:\/\/pbs.twimg.com\/profile_banners\/285353386\/1410869229","profile_link_color":"4A913C","profile_sidebar_border_color":"000000","profile_sidebar_fill_color":"000000","profile_text_color":"000000","profile_use_background_image":false,"default_profile":false,"default_profile_image":false,"following":false,"follow_request_sent":false,"notifications":false}	
}