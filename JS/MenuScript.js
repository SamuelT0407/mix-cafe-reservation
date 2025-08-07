document.addEventListener("DOMContentLoaded", function() {
	var hash = window.location.hash; /* http://localhost/assignment/Menu.php#LocalFood : hash = #LocalFood */
	if (hash) {
		var category = hash.substring(1); /* #LocalFood => LocalFood */
		filterCategory(category);
	}
});

function filterCategory(category) {
	var allItems = document.querySelectorAll('.menu-card'); /* allItems = All menu-card (NodeList:Array) */
	allItems.forEach(function(item) {
		/* using forEach to loop allItems ; item = each menu-card */
		/* for(each item of allItems{} */
		/* classList = LocalFood from (class="menu-card LocalFood") */
		if (category === 'All' || item.classList.contains(category)) {
			item.style.display = 'block';
		} else {
			item.style.display = 'none';
		}
	});
}