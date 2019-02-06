function showCircl(elem) {
	elem.firstElementChild.style.display = "none";
	elem.lastElementChild.style.display = "flex";
};
function hideCircl(elem) {
	elem.firstElementChild.style.display = "flex";
	elem.lastElementChild.style.display = "none";
};

(function(){
	window.onscroll = function() {
		let nav = document.querySelector('.navbar');
		let scrolled = document.documentElement.scrollTop;
		if(scrolled >= 500) {
			nav.style.display = 'flex';
		} else {
			nav.style.display = 'none';
		}
	}
}());

(function(){
	let arrow = document.querySelector('.arrow');
	arrow.addEventListener('click',function(){
		let timerId = setInterval(function() {
			window.scrollBy(0,10);
		},10);

		setTimeout(function() {
			clearInterval(timerId);
		}, 450);
	});
}());
