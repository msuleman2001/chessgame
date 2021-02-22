var current_login_id;
var base_url;
function updateLastSeen(login_id, url)
{
	current_login_id = login_id;
	base_url = url;
	setInterval(updateMe, 5000);
}

function updateMe()
{
	$.ajax
	({
		type: 'GET',
		url: base_url + '/index.php/Player/update_last_seen',
		dataType: 'text',
		data: {data: 'kjl'},
		contentType: false,
		processData: false,
		error: function (res){alert('E:' + res.status);},
		success: function(login_time){showLoginTime(login_time)}
	});
}

function showLoginTime(login_time)
{
	var divLoginTime = document.getElementById('divLoginTime');
	divLoginTime.innerHTML = 'Login On: ' + login_time;
}
