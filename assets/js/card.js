dragula([
	document.getElementById('1'),
	document.getElementById('2'),
	document.getElementById('3')
])

	.on('drag', function (el) {

		// add 'is-moving' class to element being dragged
		el.classList.add('is-moving');
	})
	.on('dragend', function (el) {

		// remove 'is-moving' class from element after dragging has stopped
		el.classList.remove('is-moving');

		// add the 'is-moved' class for 600ms then remove it
		window.setTimeout(function () {
			el.classList.add('is-moved');
			console.log(el.value, el.parentNode.id)
			updateStatus(el.value, el.parentNode.id)
			window.setTimeout(function () {
				el.classList.remove('is-moved');
			}, 600);
		}, 100);
	});


var showOptions = (function () {

	// the 3 dot icon
	var more = document.querySelectorAll('.drag-header-more');

	function show() {
		// show 'drag-options' div when the more icon is clicked
		var target = this.getAttribute('data-target');
		var options = document.getElementById(target);
		options.classList.toggle('active');
	}


	function init() {
		for (i = 0; i < more.length; i++) {
			more[i].addEventListener('click', show, false);
		}
	}

	return {
		init: init
	}
}());

showOptions.init();

function updateStatus(id, status) {
	var get_status;

	if (status == 1) {
		get_status = 1;
	} else if (status == 2) {
		get_status = 0;
	} else {
		get_status = 2;
	}

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			console.log(this)
			if (this.responseText == 1) {
				console.log('Berhasil')
			} else {
				console.log('Gagal')
			}
		}
	};
	xmlhttp.open('GET', 'pages/ticket/ticket_proses.php?aksi=change_status&id=' + id + '&status=' + get_status, true);
	xmlhttp.send();
}

function getDetail(id) {
	if (id) {
		if (window.XMLHttpRequest) {
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function () {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById('modal-content').innerHTML = this.responseText
			}
		};
		xmlhttp.open('GET', 'pages/ticket/ticket_proses.php?aksi=get_detail&id=' + id, true);
		xmlhttp.send();
	}
}

function submitActivity() {
	var id = document.getElementById('id_ticket').value
	var activity = document.getElementById('activity').value

	var data = {
		id: id,
		activity: activity
	}

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function () {
		if (this.readyState == 4 && this.status == 200) {
			window.location.href = "index.php"
		}
	};
	xmlhttp.open('POST', 'pages/ticket/ticket_proses.php?aksi=submit_activity', true);
	xmlhttp.setRequestHeader("Content-Type", "application/json");
	xmlhttp.send(JSON.stringify(data));
}