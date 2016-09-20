# FacebookGraphAPI Package
This is the main package to interact with Facebook users.

## How to get `access_token`:
 0. [Go to the Facebook online console](https://developers.facebook.com/tools/explorer/145634995501895/?method=POST&path=1417308701%2Ffeed&version=v2.7&message=Just%20testing%20FB%20API%20package)
 1. Press the get token button.
 
## /api/FacebookGraphAPI/validateUserToken
Make phone calls

| Field            | Type     | Description  |
| -------------    |-------------     | -----|
| `access_token`         |string  | Access token obtained from Facebook which should be validated. |

#### Request example
```json
{
		"access_token": "XXXX"
}
```
#### Response example
```json
{  
   "callback":"valid",
   "contextWrites":{  
      "to":"{\u0022data\u0022:{\u0022app_id\u0022:\u00221090865871031959\u0022,\u0022application\u0022:\u0022test\u0022,\u0022expires_at\u0022:1479475501,\u0022is_valid\u0022:true,\u0022issued_at\u0022:1474291501,\u0022scopes\u0022:[\u0022user_birthday\u0022,\u0022user_religion_politics\u0022,\u0022user_relationships\u0022,\u0022user_relationship_details\u0022,\u0022user_hometown\u0022,\u0022user_location\u0022,\u0022user_likes\u0022,\u0022user_education_history\u0022,\u0022user_work_history\u0022,\u0022user_website\u0022,\u0022user_photos\u0022,\u0022user_videos\u0022,\u0022user_friends\u0022,\u0022user_about_me\u0022,\u0022user_status\u0022,\u0022user_games_activity\u0022,\u0022user_tagged_places\u0022,\u0022user_posts\u0022,\u0022email\u0022,\u0022read_insights\u0022,\u0022publish_actions\u0022,\u0022read_audience_network_insights\u0022,\u0022read_custom_friendlists\u0022,\u0022user_actions.music\u0022,\u0022user_actions.video\u0022,\u0022user_actions.news\u0022,\u0022user_actions.fitness\u0022,\u0022user_actions.books\u0022,\u0022public_profile\u0022],\u0022user_id\u0022:\u0022640657879442008\u0022}}"
   }
}
```

## Errors
| Error            | Description     |
| -------------    |-------------     |
| `Credentials are required to create a Client`     | Provide accountSid and accountToken to establish connection properly. |
| `[HTTP 404] Unable to create record: The requested resource /2010-04-01/Accounts/AC5f37acb25ffaeb498a78/Messages.json was not found"`     | Provide correct accountSid. |
| `[HTTP 401] Unable to create record: Authenticate`     | Provide correct accountToken. |
| `[HTTP 400] Unable to create record: A "From" phone number is required.`     | One of  a mandatory field is incorrect. |
| `[HTTP 400] Unable to create record: Method is not valid: TEST`     | One of an additional field is incorrect. |

#### Request example with error
```json
{
	"accountSid": "XXXX",
	"accountToken": "XXXX",
	"from": "+15005550006",
	"to": "+15005260006",
	"url": "http://demo.twilio.com/docs/voice.xml",
	"method": "test"
}
```
#### Response
```json
{
"callback":"error",
"contextWrites":{
    "to":"[HTTP 400] Unable to create record: Method is not valid: TEST"
    }
}
```
