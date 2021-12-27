document.getElementById('modifierplat_form').addEventListener("submit",function(e)
{

	var errur;
	var description=document.getElementById("description");

if(!description.value)
{
	errur="Tout les champs sont obligatoires";
}

if(errur)
{	e.preventDefault();
	alert(errur);
}

});