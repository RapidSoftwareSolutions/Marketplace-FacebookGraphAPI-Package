# FacebookGraphAPI Package
This is the main package to interact with Facebook users.
* Domain: facebook.com
* Credentials: access_token

## How to get credentials: 
 0. [Go to the Facebook online console](https://developers.facebook.com/tools/explorer/145634995501895/?method=POST&path=1417308701%2Ffeed&version=v2.7&message=Just%20testing%20FB%20API%20package)
 1. Press the get token button.

## TOC: 
* [validateUserToken](#validateUserToken)
* [extendUserToken](#extendUserToken)
* [getUserAlbums](#getUserAlbums)
* [getUsersFriends](#getUsersFriends)
* [getUsersLikedPages](#getUsersLikedPages)
* [getCurrentProfile](#getCurrentProfile)
* [getProfile](#getProfile)
* [getProfilePicture](#getProfilePicture)
* [getLikes](#getLikes)
* [addLike](#addLike)
* [deleteLike](#deleteLike)
* [getUsersFeed](#getUsersFeed)
* [addFeedPost](#addFeedPost)
* [deleteFeedPost](#deleteFeedPost)
* [getComments](#getComments)
* [addComment](#addComment)
* [updateComment](#updateComment)
* [deleteComment](#deleteComment)
* [getAlbum](#getAlbum)
* [createAlbum](#createAlbum)
* [getAlbumPhotos](#getAlbumPhotos)
* [addPhotoToAlbum](#addPhotoToAlbum)
* [getPhoto](#getPhoto)
 
<a name="validateUserToken"/>
## FacebookGraphAPI.validateUserToken
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook which should be validated.

#### Request example
```json
{	"access_token": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": {
                     "app_id": "XXXX",
                     "application": "test",
                     "expires_at": 1474585200,
                     "is_valid": true,
                     "scopes": [
                       "user_birthday",
                       "user_religion_politics",
                       "user_relationships",
                       "user_relationship_details",
                       "user_hometown",
                       "user_location",
                       "user_likes",
                       "user_education_history",
                       "user_work_history",
                       "user_website",
                       "user_managed_groups",
                       "user_events",
                       "user_photos",
                       "user_videos",
                       "user_friends",
                       "user_about_me",
                       "user_status",
                       "user_games_activity",
                       "user_tagged_places",
                       "user_posts",
                       "read_page_mailboxes",
                       "rsvp_event",
                       "email",
                       "ads_management",
                       "ads_read",
                       "read_insights",
                       "manage_pages",
                       "publish_pages",
                       "pages_show_list",
                       "pages_manage_cta",
                       "pages_manage_instant_articles",
                       "business_management",
                       "pages_messaging",
                       "pages_messaging_phone_number",
                       "pages_messaging_subscriptions",
                       "publish_actions",
                       "read_audience_network_insights",
                       "read_custom_friendlists",
                       "user_actions.music",
                       "user_actions.video",
                       "user_actions.news",
                       "user_actions.fitness",
                       "user_actions.books",
                       "public_profile"
                     ],
                     "user_id": "XXXX"
                   }
                 }

		}
	}
}
```

<a name="extendUserToken"/>
## FacebookGraphAPI.extendUserToken
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| app_id      | String| The App ID.
| app_secret  | String| The app's app secret.

#### Request example
```json
{	"access_token": "...",
	"app_id": "...",
	"app_secret": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":
			{
                   "access_token": "XXXXXX",
                   "token_type": "bearer",
                   "expires_in": 5135771
            }
           }
	}
}
```

<a name="getUserAlbums"/>
## FacebookGraphAPI.getUserAlbums
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| prodile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	"access_token": "...",
	"prodile_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                     {
                       "created_time": "2016-09-19T09:51:17+0000",
                       "name": "test",
                       "id": "641525222521"
                     },
                     {
                       "created_time": "2016-09-20T12:56:47+0000",
                       "name": "test2",
                       "id": "64195525252800"
                     },
                     {
                       "created_time": "2016-09-20T12:17:12+0000",
                       "name": "Profile Pictures",
                       "id": "6419240552721"
                     }
                   ],
                   "paging": {
                     "cursors": {
                       "before": "NjQxNDUyNzQ5MzYyNTIx",
                       "after": "NjQxOTQ0MDgyNjQ2NzIx"
                     }
                   }
                 }
		}
	}
}
```

<a name="getUsersFriends"/>
## FacebookGraphAPI.getUsersFriends
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	"access_token": "...",
	"user_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                   ],
                   "summary": {
                     "total_count": 0
                   }
                 }
		}
	}
}
```

<a name="getUsersLikedPages"/>
## FacebookGraphAPI.getUsersLikedPages
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	"access_token": "...",
	"user_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                     {
                       "name": "Coca-Cola",
                       "id": "407944433305",
                       "created_time": "2016-09-20T12:24:55+0000"
                     }
                   ],
                   "paging": {
                     "cursors": {
                       "before": "MTU0MjkyMDExNTk1MTk4NQZDZD",
                       "after": "MTU0MjkyMDExNTk1MTk4NQZDZD"
                     },
                     "next": "https://graph.facebook.com/v2.7/6403333442008/likes?access_token=EAAPgIwC9jp33edkdejQcQpoKUO9EaYAjXB8FAc55kmXK5FU1WvHVx8w9UjuZCOOhKF92iqN7El3fAv3mDvuG8VZBHJXDm9dPG5CkXo2IW2nZAtHxaObcUyO05E4DOw4pyNSNbIK0eFbmWXMIqcnL15ZA&pretty=0&limit=25&after=MTU0MjkyMDExNTk1MTk4NQZDZD"
                   }
                 }
		}
	}
}
```

<a name="getCurrentProfile"/>
## FacebookGraphAPI.getCurrentProfile
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.

#### Request example
```json
{	"access_token": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "name": "test",
                   "id": "6406443308"
                 }
		}
	}
}
```

<a name="getProfile"/>
## FacebookGraphAPI.getProfile
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	"access_token": "...",
	"profile_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "name": "test",
                   "id": "6405453342008"
                 }
		}
	}
}
```

<a name="getProfilePicture"/>
## FacebookGraphAPI.getProfilePicture
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	"access_token": "...",
	"profile_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": {
                     "is_silhouette": false,
                     "url": "https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/143543457_6419445433980056_176978854334549222_n.jpg?oh=90931e5cdeea9746559543ggg7e52c&oe=586EEE0B"
                   }
                 }
		}
	}
}
```

<a name="getLikes"/>
## FacebookGraphAPI.getLikes
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	"access_token": "...",
	"object_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                     {
                       "id": "64045789968",
                       "name": "test"
                     }
                   ],
                   "paging": {
                     "cursors": {
                       "before": "NjQwNjU3ODc5NDQyMDA4",
                       "after": "NjQwNjU3ODc5NDQyMDA4"
                     }
                   }
                 }
		}
	}
}
```

<a name="addLike"/>
## FacebookGraphAPI.addLike
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	"access_token": "...",
	"object_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "success": true
                 }
		}
	}
}
```

<a name="deleteLike"/>
## FacebookGraphAPI.deleteLike
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	"access_token": "...",
	"object_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "success": true
                 }
		}
	}
}
```

<a name="getUsersFeed"/>
## FacebookGraphAPI.getUsersFeed
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	"access_token": "...",
	"user_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                     {
                       "message": "test",
                       "created_time": "2016-09-22T07:48:21+0000",
                       "id": "640657879442008_6429332283820"
                     },
                     {
                       "message": "ok",
                       "created_time": "2016-09-20T15:19:08+0000",
                       "id": "640657879442008_64202e33372345"
                     },
                     {
                       "story": "test shared a link.",
                       "created_time": "2015-03-02T21:52:01+0000",
                       "id": "640657879442008_419835038190961"
                     },
                     {
                       "story": "test added a life event from July 222, 1901: Born on July 22, 1901.",
                       "created_time": "1994-07-02T07:00:00+0000",
                       "id": "640653332008_32146327718"
                     }
                   ],
                   "paging": {
                     "previous": "https://graph.facebook.com/v2.7/643332008/feed?type=large&format=json&since=1474530501&access_token=EAAPgIwC9jpcBAKf19MADPOH2oRhkZAqfxq1TFS1nk7jokz6QcQpoKUO9EaYAjXB8FAc55kmXK5FU1WvHVx8w9UjuZCOOhKF92iqN3322AtHxaObcUyO05E4DOw4pyNSNbIK0eFbmWXMIqcnL15ZA&limit=25&__paging_token=enc_33FmfyuuykZBZBaqjcG6ocwsh6kGpH4QAZCh2ttpk89yAWXEvPyjNmVZA9BLXYAsmQjRYSV3AAlAaWfQG9nBJgyHO3TllQZDZD&__previous=1",
                     "next": "https://graph.facebook.com/v2.7/6406533242008/feed?type=large&format=json&access_token=EAAPgIwC9jpcBAKf19MADPOH2oRhkZAqfxq1TFS1nk7jokz6QcQpoKUO9EaYAjXB8FAc55kmXK5FU1WvHVx8w9UjuZCOOhKF92iqN7El3fAv332bcUyO05E4DOw4pyNSNbIK0eFbmWXMIqcnL15ZA&limit=25&until=773132400&__paging_token=enc_AdCJNopYZCHdj5IZA333Bt9DMk4sqVmauLBWcXTheMNeZCYb6TiyVohpaymYGsV21WCJe3rf3LRZBYYaMX1ZB6jWyqDlJt5oFzAZDZD"
                   }
                 }
		}
	}
}
```

<a name="addFeedPost"/>
## FacebookGraphAPI.addFeedPost
Method description

| Field            | Type  | Description
|------------------|-------|----------
| access_token     | credentials| Access token obtained from Facebook.
| message          | String| Optimal: The main body of the post, otherwise called the status message. Either link, place, or message must be supplied.
| link             | String| Optimal: The URL of a link to attach to the post. Either link, place, or message must be supplied. Additional fields associated with link are shown below.
| place            | String| Optimal: Page ID of a location associated with this post. Either link, place, or message must be supplied..
| tags             | String| Optimal: Comma-separated list of user IDs of people tagged in this post. You cannot specify this field without also specifying a place.
| privacy          | String| Optimal: Determines the privacy settings of the post. If not supplied, this defaults to the privacy level granted to the app in the Login Dialog. This field cannot be used to set a more open privacy setting than the one granted.
| object_attachment| String| Optimal: Facebook ID for an existing picture in the person's photo albums to use as the thumbnail image. They must be the owner of the photo, and the photo cannot be part of a message attachment.

#### Request example
```json
{	"access_token": "...",
	"message": "...",
	"link": "...",
	"place": "...",
	"tags": "...",
	"privacy": "...",
	"object_attachment": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "id": "6467562452442008_6431716754222357"
                 }
		}
	}
}
```

<a name="deleteFeedPost"/>
## FacebookGraphAPI.deleteFeedPost
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| post_id     | String| Facebook post id.

#### Request example
```json
{	"access_token": "...",
	"post_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "success": true
                 }
		}
	}
}
```

<a name="getComments"/>
## FacebookGraphAPI.getComments
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	"access_token": "...",
	"object_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":
{
  "data": [
    {
      "created_time": "2016-09-22T07:48:45+0000",
      "from": {
        "name": "test",
        "id": "640657879442008"
      },
      "message": "test yeah",
      "id": "6429065648820_64295658950481"
    },
    {
      "created_time": "2016-09-22T07:51:36+0000",
      "from": {
        "name": "test2",
        "id": "64065757478008"
      },
      "message": "changable",
      "id": "6429064675583820_64290676757116"
    }
  ],
  "paging": {
    "cursors": {
      "before": "WTI5dGJXVnVkRjlqZAFhKemIzSTZAOalF5T1RBMk5EZA3lOVFV3TkRneE9qRTBOelExTXpBMU1qVT0ZD",
      "after": "WTI5dGJXVnVkRjlqZAFhKemIzSTZAOalF5T1RBMk56azVNakUzTVRFMk9qRTBOelExTXpBMk9UWT0ZD"
    }
  }
}
		}
	}
}
```

<a name="addComment"/>
## FacebookGraphAPI.addComment
Method description

| Field         | Type  | Description
|---------------|-------|----------
| access_token  | credentials| Access token obtained from Facebook.
| object_id     | String| Facebook object id.
| message       | String| Optimal: The comment text
| attachment_id | String| Optimal: An optional ID of a unpublished photo uploaded to Facebook to include as a photo comment. 
| attachment_url| String| Optimal: The URL of an image to include as a photo comment.

#### Request example
```json
{	"access_token": "...",
	"object_id": "...",
	"message": "...",
	"attachment_id": "...",
	"attachment_url": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                 "id": "6467562452442008_6431716754222357"
                 }
		}
	}
}
```

<a name="updateComment"/>
## FacebookGraphAPI.updateComment
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.
| message     | String| The updated comment text.
| is_hidden   | String| Whether this comment is hidden or visible. The original poster can still see the comment, along with the page admin and anyone else tagged in the comment

#### Request example
```json
{	"access_token": "...",
	"comment_id": "...",
	"message": "...",
	"is_hidden": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                  "success": true
                 }
		}
	}
}
```

<a name="deleteComment"/>
## FacebookGraphAPI.deleteComment
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.

#### Request example
```json
{	"access_token": "...",
	"comment_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                  "success": true
                 }
		}
	}
}
```

<a name="getAlbum"/>
## FacebookGraphAPI.getAlbum
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

#### Request example
```json
{	"access_token": "...",
	"album_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "created_time": "2016-09-19T09:51:17+0000",
                   "name": "test",
                   "id": "64778789362521"
                 }
		}
	}
}
```

<a name="createAlbum"/>
## FacebookGraphAPI.createAlbum
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| Facebook profile id.
| name        | String| The title of the album
| location    | String| Optimal: A text location of the album for non-page locations.
| message     | String| Optimal: The album's caption. This appears below the title of the album in the album view.
| place       | String| Optimal: The ID of a location page to tag the album with.
| privacy     | String| Optimal: The privacy of the album.

#### Request example
```json
{	"access_token": "...",
	"profile_id": "...",
	"name": "...",
	"location": "...",
	"message": "...",
	"place": "...",
	"privacy": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                  "id": "6467676726268442008_6431719877222357"
                 }
		}
	}
}
```

<a name="getAlbumPhotos"/>
## FacebookGraphAPI.getAlbumPhotos
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

#### Request example
```json
{	"access_token": "...",
	"album_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                   "data": [
                     {
                       "created_time": "2016-09-19T09:51:24+0000",
                       "id": "6417867222029186"
                     },
                     {
                       "created_time": "2016-09-20T12:59:42+0000",
                       "name": "dohh",
                       "id": "6419766555350"
                     }
                   ],
                   "paging": {
                     "cursors": {
                       "before": "NjQxNDUyNzY2MDI5MTg2",
                       "after": "NjQxOTU3NzkyNjQ1MzUw"
                     }
                   }
                 }
		}
	}
}
```

<a name="addPhotoToAlbum"/>
## FacebookGraphAPI.addPhotoToAlbum
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.
| photo       | String| The URL of a photo that is already uploaded to the internet.
| message     | String| Optimal: The description of the photo, used as the accompanying status message in any feed story.
| place       | String| Optimal: Page ID of a place associated with the Photo.
| no_story    | String| Optimal: If set to true, this will suppress the feed story that is automatically generated on a person's profile when they upload a photo using your app.

#### Request example
```json
{	"access_token": "...",
	"album_id": "...",
	"photo": "...",
	"message": "...",
	"place": "...",
	"no_story": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":{
                 "id": "64676676562268442008_64317122222357"
                 }
		}
	}
}
```

<a name="getPhoto"/>
## FacebookGraphAPI.getPhoto
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| photo_id    | String| Facebook photo id.

#### Request example
```json
{	"access_token": "...",
	"photo_id": "..."
}
```
#### Response example
```json
{
	"callback":"success",
	"contextWrites":{
		"#":{
			"to":  {
			        "created_time": "2016-09-20T12:59:42+0000",
                   "name": "ohhh",
                   "id": "64195876625350"
                 }
		}
	}
}
```

