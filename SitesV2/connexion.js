



function ShowHide(id) {
    var NameDiv = document.getElementById("container");
    var divco = document.getElementById("dynamique");
    console.log(NameDiv);
    console.log(divco);
    if (NameDiv.style.display === '' || NameDiv.style.display === 'none') {
        NameDiv.style.display = 'block';
        divco.style.display = 'none';

    } else {
        NameDiv.style.display = 'none';
        divco.style.display = 'block';
    }
}

function background(id) {
	var formul = document.getElementById("container");
	if (formul.style.display === 'block') {
	    formuul.style.display = 'none';
		formul.style.display = '';
	}

	else {

	};
};