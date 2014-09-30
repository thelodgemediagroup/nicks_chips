Cufon.replace('.coop', {hover: 'true'});
Cufon.replace('.page-header');
Cufon.replace('.newproduct-subheader');

var instagramUsername = 'instagram-username';
var instagramCount = 'instagram-count';
var instagramFollowers = 'instagram-followers';
var userID = '359695197';
var accessToken = '452319737.1fb234f.eb5eb753e74f495fbd0f8d4dc1d1c4c0';
var instagramURL = "https://api.instagram.com/v1/users/" + userID + "?access_token=" + accessToken;

function instagramText(username, photos, followers) {
	document.getElementById(instagramUsername).innerHTML = username;
	document.getElementById(instagramCount).innerHTML = photos + " photos";
	document.getElementById(instagramFollowers).innerHTML = followers + " followers";
}

$(document).ready(function() {
	$('.instagram').instagram({
		userId: userID,
		accessToken: accessToken,
		show: 4
	});

	$.ajax({
		type: "GET",
		dataType: "jsonp",
		cache: true,
		url: instagramURL,
		success: function(res) {
			var username, photos, followers;
			var instagramData = JSON.stringify(res);
			var parsedData = JSON.parse(instagramData, function(key, value) {
				if (key == "username") {
					username = value;
				}
				if (key == "media") {
					photos = value;
				}
				if (key == "followed_by") {
					followers = value;
				}
			});
			instagramText(username, photos, followers);
		}
	});
});
