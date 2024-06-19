
function cardpace()
		{
			var carddigit = document.getElementById('inputCardNumber').value;
			if(carddigit.length == 4 || carddigit.length == 9 || carddigit.length == 14 )
			{
				document.getElementById('inputCardNumber').value = carddigit + " ";
				document.getElementById('inputCardNumber').max = 1;
				
			}
		}

function addShelsheet()
		{
			var expiredate = document.getElementById('inputEpairDate').value;
			if( expiredate.length == 2)
			{
				document.getElementById('inputEpairDate').value = expiredate + " /";
				document.getElementById('inputEpairDate').max = 1;
				
			}
		} 