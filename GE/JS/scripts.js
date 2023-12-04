function modalContacto()
{
	document.getElementById("modalContacto").style.display="block";
	document.documentElement.style.overflow="hidden";

	var mensaje;
	var nombre = document.getElementById("formNombre").value;
	var mail = document.getElementById("mailForm").value;
	var mensaje2 = document.getElementById("mensajeContacto").value;

	(function formCheck()
	{
		if(!document.getElementById("formNombre").checkValidity())
		{
			mensaje = "Introduce un nombre correcto";
			document.getElementById("mensajeContacto").innerHTML = mensaje;
		}

		else if (!document.getElementById("mailForm").checkValidity())
		{
			mensaje = "Introduce una dirección de email válida";
			document.getElementById("mensajeContacto").innerHTML = mensaje;
		}

		else
		{
			mensaje = "Dear " + nombre + ", we can confirm that your message has been succesfully sent. We'll send an answer as soon as possible to you at " + mail;

			document.getElementById("mensajeContacto").innerHTML = mensaje;
		}
	}
		)();

	
}

function cerrarModalBoxContacto()
{
	document.getElementById("modalContacto").style.display="none";
	document.documentElement.style.overflow="auto";

	
	document.getElementById("formNombre").value = "";
	document.getElementById("mailForm").value = "";
	document.getElementById("mensaje2").value = "";
}

//Modal Login

function modalLogin()
{
	document.getElementById("modalLogin").style.display="block";
	document.documentElement.style.overflow="hidden";

	var mensaje;
	var nombre = document.getElementById("formNombrLogine").value;
	var mail = document.getElementById("mailFormLogin").value;
	var mensaje2 = document.getElementById("mensajeLogin").value;

	(function formCheck()
	{
		if(!document.getElementById("formNombreLogin").checkValidity())
		{
			mensaje = "Introduce un nombre correcto";
			document.getElementById("mensajeLogin").innerHTML = mensaje;
		}

		else if (!document.getElementById("mailFormLogin").checkValidity())
		{
			mensaje = "Introduce una dirección de email válida";
			document.getElementById("mensajeLogin").innerHTML = mensaje;
		}

		/* Programar inicio de sesión */
		/*
		else
		{
			mensaje = "Dear " + nombre + ", we can confirm that your message has been succesfully sent. We'll send an answer as soon as possible to you at " + mail;

			document.getElementById("mensajeLogin").innerHTML = mensaje;
		}
		*/
	}
		)();

	
}

function cerrarModalLogin()
{
	document.getElementById("modalLogin").style.display="none";
	document.documentElement.style.overflow="auto";

	
	document.getElementById("formNombreLogin").value = "";
	document.getElementById("mailFormLogin").value = "";
	document.getElementById("mensaje2").value = "";
}

//Modal Signup [FALTA AÑADIR UNA COMPROBACIÓN DE CONTRASEÑA]

function modalSignup()
{
	document.getElementById("modalSignup").style.display="block";
	document.documentElement.style.overflow="hidden";

	var mensaje;
	var nombre = document.getElementById("formNombreSignup").value;
	var mail = document.getElementById("mailFormSignup").value;
	

	(function formCheck()
	{
		if(!document.getElementById("formNombreSignup").checkValidity())
		{
			mensaje = "Introduce un nombre correcto";
			document.getElementById("mensajeSignup").innerHTML = mensaje;
		}

		else if (!document.getElementById("mailFormSignup").checkValidity())
		{
			mensaje = "Introduce una dirección de email válida";
			document.getElementById("mensajeSignup").innerHTML = mensaje;
		}

		/* Programar inicio de sesión */
		/*
		else
		{
			mensaje = "Dear " + nombre + ", we can confirm that your message has been succesfully sent. We'll send an answer as soon as possible to you at " + mail;

			document.getElementById("mensajeLogin").innerHTML = mensaje;
		}
		*/
	}
		)();

	
}

function cerrarModalSignup()
{
	document.getElementById("modalSignup").style.display="none";
	document.documentElement.style.overflow="auto";

	
	document.getElementById("formNombreSignup").value = "";
	document.getElementById("mailFormSignup").value = "";
	document.getElementById("mensaje2").value = "";
}