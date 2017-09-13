[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/FacebookGraphAPI/functions?utm_source=RapidAPIGitHub_FacebookGraphFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# FacebookGraphAPI Package
This is the main package to interact with Facebook users.
* Domain: [facebook.com](https://facebook.com)
* Credentials: access_token

## How to get credentials: 
 0. [Go to the Facebook online console](https://developers.facebook.com/tools/explorer/145634995501895/?method=POST&path=1417308701%2Ffeed&version=v2.7&message=Just%20testing%20FB%20API%20package)
 1. Press the get token button.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```

## FacebookGraphAPI.validateUserToken
Validate user token.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook which should be validated.

## FacebookGraphAPI.extendUserToken
Extend user token.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| app_id      | String| The App ID.
| app_secret  | String| The app's app secret.

## FacebookGraphAPI.getUserAlbums
Get user Albums.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| prodile_id  | String| [opt, =me], Facebook profile id.

## FacebookGraphAPI.getUsersFriends
Get user Friends.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

## FacebookGraphAPI.getUsersLikedPages
Get pages liked by user.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.

## FacebookGraphAPI.getCurrentProfile
Get current user profile.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.

## FacebookGraphAPI.getProfile
Get user profile.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

## FacebookGraphAPI.getProfilePicture
Get user profile picture.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| [opt, =me], Facebook profile id.

## FacebookGraphAPI.getLikes
Get likes.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

## FacebookGraphAPI.addLike
Add like to object.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

## FacebookGraphAPI.deleteLike
Delete like from object.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

## FacebookGraphAPI.getUsersFeed
Get user Feed.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| user_id     | String| [opt, =me], Facebook user id.


## FacebookGraphAPI.addFeedPost
Add post to user feed.

| Field            | Type  | Description
|------------------|-------|----------
| access_token     | credentials| Access token obtained from Facebook.
| message          | String| The main body of the post, otherwise called the status message. Either link, place, or message must be supplied.
| link             | String| The URL of a link to attach to the post. Either link, place, or message must be supplied. Additional fields associated with link are shown below.
| place            | String| Page ID of a location associated with this post. Either link, place, or message must be supplied..
| tags             | String| Comma-separated list of user IDs of people tagged in this post. You cannot specify this field without also specifying a place.
| privacy          | String| Determines the privacy settings of the post. If not supplied, this defaults to the privacy level granted to the app in the Login Dialog. This field cannot be used to set a more open privacy setting than the one granted.
| object_attachment| String| Facebook ID for an existing picture in the person's photo albums to use as the thumbnail image. They must be the owner of the photo, and the photo cannot be part of a message attachment.

## FacebookGraphAPI.deleteFeedPost
Delete post from user feed.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| post_id     | String| Facebook post id.

## FacebookGraphAPI.getComments
Get object comments.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| object_id   | String| Facebook object id.

## FacebookGraphAPI.addComment
Add comment to object.

| Field         | Type  | Description
|---------------|-------|----------
| access_token  | credentials| Access token obtained from Facebook.
| object_id     | String| Facebook object id.
| message       | String| The comment text
| attachment_id | String| An optional ID of a unpublished photo uploaded to Facebook to include as a photo comment. 
| attachment_url| String| The URL of an image to include as a photo comment.

## FacebookGraphAPI.updateComment
Update object comment.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.
| message     | String| The updated comment text.
| is_hidden   | String| Whether this comment is hidden or visible. The original poster can still see the comment, along with the page admin and anyone else tagged in the comment

## FacebookGraphAPI.deleteComment
Delete comment from object.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| comment_id  | String| Facebook comment id.

## FacebookGraphAPI.getAlbum
Get user album.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

## FacebookGraphAPI.createAlbum
Create new Album.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| profile_id  | String| Facebook profile id.
| name        | String| The title of the album
| location    | String| A text location of the album for non-page locations.
| message     | String| The album's caption. This appears below the title of the album in the album view.
| place       | String| The ID of a location page to tag the album with.
| privacy     | String| The privacy of the album.

## FacebookGraphAPI.getAlbumPhotos
Get photos from user album.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.

## FacebookGraphAPI.addPhotoToAlbum
Add new photo to user album.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| album_id    | String| Facebook album id.
| photo       | String| The URL of a photo that is already uploaded to the internet.
| message     | String| The description of the photo, used as the accompanying status message in any feed story.
| place       | String| Page ID of a place associated with the Photo.
| no_story    | String| If set to true, this will suppress the feed story that is automatically generated on a person's profile when they upload a photo using your app.

## FacebookGraphAPI.getPhoto
Get photo.

| Field       | Type  | Description
|-------------|-------|----------
| access_token| credentials| Access token obtained from Facebook.
| photo_id    | String| Facebook photo id.
