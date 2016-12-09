# FacebookGraphAPI Package
This is the main package to interact with Facebook users.
* Domain: facebook.com
* Credentials: access_token

## How to get credentials: 
 0. [Go to the Facebook online console](https://developers.facebook.com/tools/explorer/145634995501895/?method=POST&path=1417308701%2Ffeed&version=v2.7&message=Just%20testing%20FB%20API%20package)
 1. Press the get token button.
 

## FacebookGraphAPI.validateUserToken

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook which should be validated.

#### Request example
```json
{	
  "access_token": "..."
}
```

## FacebookGraphAPI.extendUserToken

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| app_id      | String| The App ID.
| app_secret  | String| The app's app secret.

#### Request example
```json
{	
  "access_token": "...",
	"app_id": "...",
	"app_secret": "..."
}
```

## FacebookGraphAPI.getUserAlbums

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| prodile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	
  "access_token": "...",
	"prodile_id": "..."
}
```

## FacebookGraphAPI.getUsersFriends

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	
  "access_token": "...",
	"user_id": "..."
}
```

## FacebookGraphAPI.getUsersLikedPages

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	
  "access_token": "...",
	"user_id": "..."
}
```

## FacebookGraphAPI.getCurrentProfile

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.

#### Request example
```json
{	
  "access_token": "..."
}
```

## FacebookGraphAPI.getProfile

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	
  "access_token": "...",
	"profile_id": "..."
}
```

## FacebookGraphAPI.getProfilePicture

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

#### Request example
```json
{	
  "access_token": "...",
	"profile_id": "..."
}
```

## FacebookGraphAPI.getLikes
Method description

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	
  "access_token": "...",
	"object_id": "..."
}
```

## FacebookGraphAPI.addLike

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	
  "access_token": "...",
	"object_id": "..."
}
```

## FacebookGraphAPI.deleteLike

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

#### Request example
```json
{	
  "access_token": "...",
	"object_id": "..."
}
```

## FacebookGraphAPI.getUsersFeed

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

#### Request example
```json
{	
  "access_token": "...",
	"user_id": "..."
}
```

## FacebookGraphAPI.addFeedPost

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
{	
  "access_token": "...",
	"message": "...",
	"link": "...",
	"place": "...",
	"tags": "...",
	"privacy": "...",
	"object_attachment": "..."
}

## FacebookGraphAPI.deleteFeedPost

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| post_id     | String| Facebook post id.

#### Request example
```json
{	
  "access_token": "...",
	"post_id": "..."
}
```

## FacebookGraphAPI.getComments

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

## FacebookGraphAPI.addComment

| Field         | Type  | Description
|---------------|-------|----------
| access_token  | credentials| Access token obtained from Facebook.
| object_id     | String| Facebook object id.
| message       | String| Optimal: The comment text
| attachment_id | String| Optimal: An optional ID of a unpublished photo uploaded to Facebook to include as a photo comment. 
| attachment_url| String| Optimal: The URL of an image to include as a photo comment.

#### Request example
```json
{	
  "access_token": "...",
	"object_id": "...",
	"message": "...",
	"attachment_id": "...",
	"attachment_url": "..."
}
```

## FacebookGraphAPI.updateComment

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.
| message     | String| The updated comment text.
| is_hidden   | String| Whether this comment is hidden or visible. The original poster can still see the comment, along with the page admin and anyone else tagged in the comment

#### Request example
```json
{	
  "access_token": "...",
	"comment_id": "...",
	"message": "...",
	"is_hidden": "..."
}
```

## FacebookGraphAPI.deleteComment

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.

#### Request example
```json
{	
  "access_token": "...",
	"comment_id": "..."
}
```

## FacebookGraphAPI.getAlbum

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

#### Request example
```json
{	
  "access_token": "...",
	"album_id": "..."
}
```

## FacebookGraphAPI.createAlbum

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
{	
  "access_token": "...",
	"profile_id": "...",
	"name": "...",
	"location": "...",
	"message": "...",
	"place": "...",
	"privacy": "..."
}
```

## FacebookGraphAPI.getAlbumPhotos

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

#### Request example
```json
{	
  "access_token": "...",
	"album_id": "..."
}
```

## FacebookGraphAPI.addPhotoToAlbum

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
{	
  "access_token": "...",
	"album_id": "...",
	"photo": "...",
	"message": "...",
	"place": "...",
	"no_story": "..."
}
```

## FacebookGraphAPI.getPhoto

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| photo_id    | String| Facebook photo id.

#### Request example
```json
{	
  "access_token": "...",
	"photo_id": "..."
}
```