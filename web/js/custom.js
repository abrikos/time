/**
 * Created by abrikos on 12.11.16.
 */
function siteUpdate() {
	$.getJSON('/update/pull',function (json) {
		console.log(json)
	})
}

function bonusesDelete() {
	if(confirm('Удалить все бонусы?')){
		$.getJSON('/card/bonuses-delete',function (json) {
			alert(json.result);
			document.location.href = '/'
		})
	}
}
