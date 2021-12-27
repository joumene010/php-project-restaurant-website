document.getElementById('ajouterplat_form').addEventListener("submit",function(e)
{

	var errur;
	var description=document.getElementById("description");
	var photo=document.getElementById("photo");


if(!description.value || !photo.value)
{
	errur="Tout les champs sont obligatoires";
}

if(errur)
{	e.preventDefault();
	alert(errur);
}

});