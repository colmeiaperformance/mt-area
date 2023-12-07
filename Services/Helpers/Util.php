<?php

function getTipo($type)
{
	switch ($type) {
		case 'D':
			return "Débito";
		
		case 'C':
			return "Crédito";
			
		case 'P':
			return "Pix";
	}
	
	return "";
}