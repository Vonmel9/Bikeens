function getXMLHttpRequest()
{
	var xhr = null;

	if (window.XMLHttpRequest || window.ActiveXObject)
	{
		if (window.ActiveXObject)
		{
			try
			{
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e)
				{
					xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}
		} else
			{
				xhr = new XMLHttpRequest();
			}
	} else
		{
			alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
			return null;
		}

	return xhr;
}

// Request AJAX
// Param: Page of the request, value of parameters and callback function
function request(page, param_value, callback)
{
    var xhr = getXMLHttpRequest();

    xhr.onreadystatechange = function()
    {
        if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0))
        {
            callback(xhr.responseText);
        }
    };

    xhr.open("POST", page, false);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var param = "parameter="+param_value;
    xhr.send(param);
}
