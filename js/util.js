/**
 * Reserved for future use
 * @param text string Language to translate
 * @return string Translated string
 */
function gettext(text){
	return text;
}

/**
 * http://stackoverflow.com/questions/1349404/generate-a-string-of-5-random-characters-in-javascript
 * @return string Random String
 */
 function makeId(){
    var text = '',
    possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for(var i=0; i < 10; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
}