compteur = 0
function light()
			{
			if (compteur==0)
			{
			document.images["ampoule"].src="ampouleOk.gif";
			 compteur=1;}
			else
			{document.images["ampoule"].src="ampouleHs.gif";
			 compteur=0;}
			}