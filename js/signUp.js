// selct modify
        function show_destinations() 
		{
            var boardPlace = document.querySelector('.board_place');
            var destination = document.querySelector('.destination');

            // Clear existing options
            destination.innerHTML = '<option value="">Select destination</option>';

            if (boardPlace.value === 'Galle')
			{
                destination.innerHTML += '<option value="Jaffna">Jaffna</option>';
                destination.innerHTML += '<option value="Negombo">Negombo</option>';
                destination.innerHTML += '<option value="Ampara">Ampara</option>';
                destination.innerHTML += '<option value="Mullaitive">Mullaitive</option>';
            } 
			else if (boardPlace.value === 'Mathara') 
			{
                destination.innerHTML += '<option value="Batticaloa">Batticaloa</option>';
                destination.innerHTML += '<option value="Kanndy">Kanndy</option>';
                destination.innerHTML += '<option value="Trincimolee">Trincimolee</option>';
                destination.innerHTML += '<option value="Polonnaruva">Polonnaruva</option>';
            }

            showDeparture(); // Call the showDeparture() function after updating the destinations
            showReturn(); // Call the showReturn() function after updating the destinations
        }

		// Departure value disply
        function showDeparture() 
		{
            var boardPlace = document.querySelector('.board_place');
            var destination = document.querySelector('.destination');
            var departureDate = document.getElementById('departure_date');
            var departureTime = document.getElementById('departure_time');
			var Amount;

            if (boardPlace.value === 'Galle' && destination.value === 'Jaffna')
			{
                departureDate.value = '2023/06/05';
                departureTime.value = '6.00AM';
				Amount = 'RS 5200.00'
            } 
			else if (boardPlace.value === 'Galle' && destination.value === 'Negombo')
			{
                departureDate.value = '2023/06/06';
                departureTime.value = '7.00AM';
				Amount = 'RS 2800.00'
            }
			else if (boardPlace.value === 'Galle' && destination.value === 'Ampara')
			{
                departureDate.value = '2023/06/07';
                departureTime.value = '8.00AM';
				Amount = 'RS 3900.00'
            }
			else if (boardPlace.value === 'Galle' && destination.value === 'Mullaitive')
			{
                departureDate.value = '2023/06/08';
                departureTime.value = '9.00AM';
				Amount = 'RS 4800.00'
            }
			
			else if (boardPlace.value === 'Mathara' && destination.value === 'Batticaloa')
			{
                departureDate.value = '2023/06/08';
                departureTime.value = '9.10AM';
				Amount = 'RS 3900.00'
            }
			
			else if (boardPlace.value === 'Mathara' && destination.value === 'Kanndy')
			{
                departureDate.value = '2023/06/06';
                departureTime.value = '8.45AM';
				Amount = 'RS 3200.00'
            }
			else if (boardPlace.value === 'Mathara' && destination.value === 'Trincimolee')
			{
				departureDate.value = '2023/06/11';
                departureTime.value = '9.10AM';
				Amount = 'RS 4800.00'
            }
			else if (boardPlace.value === 'Mathara' && destination.value === 'Polonnaruva')
			{
				departureDate.value = '2023/06/25';
                departureTime.value = '10.00AM';
				Amount = 'RS 4000.00'
            }
			else
			{
				departureDate.value = '';
                departureTime.value = '';
			}
        }
		
		
		
			// return value disply
        function showReturn() 
		{
            var boardPlace = document.querySelector('.board_place');
            var destination = document.querySelector('.destination');
            var returnDate = document.getElementById('return_date');
            var returnTime = document.getElementById('return_time');

            if (boardPlace.value === 'Galle' && destination.value === 'Jaffna') {
                returnDate.value = '2023/06/06';
                returnTime.value = '8.00PM';
            } 
			else if (boardPlace.value === 'Mathara' && destination.value === 'Batticaloa')
			{
                returnDate.value = '2023/06/06';
                returnTime.value = '11.00PM';
            }
			else if (boardPlace.value === 'Galle' && destination.value === 'Negombo')
			{
                returnDate.value = '2023/06/06';
                returnTime.value = '9.00AM';
            }
			else if (boardPlace.value === 'Galle' && destination.value === 'Ampara')
			{
                returnDate.value = '2023/06/07';
                returnTime.value = '10.00AM';
            }
			else if (boardPlace.value === 'Galle' && destination.value === 'Mullaitive')
			{
                returnDate.value = '2023/06/07';
                returnTime.value = '11.00AM';
            }
			
			else if (boardPlace.value === 'Mathara' && destination.value === 'Kanndy')
			{
                returnDate.value = '2023/06/10';
                returnTime.value = '9.00PM';
            }
			else if (boardPlace.value === 'Mathara' && destination.value === 'Trincimolee')
			{
                returnDate.value = '2023/06/11';
                returnTime.value = '10.00PM';
            }
			else if (boardPlace.value === 'Mathara' && destination.value === 'Polonnaruva')
			{
                returnDate.value = '2023/06/12';
                returnTime.value = '11.00PM';
            }
			else 
			{
				returnDate.value = '';
                returnTime.value = '';
				
			}
        }
		
		function valuepass()
		{
			var boardPlace = document.querySelector('.board_place');
			var destination = document.querySelector('.destination');
			var Amount = document.getElementById('Amount'); 

			if (boardPlace.value === 'Galle' && destination.value === 'Jaffna')
			{
				Amount.value = 'RS 5200.00';
				
			} 
			else if (boardPlace.value === 'Galle' && destination.value === 'Negombo') 
			{
				Amount.value = 'RS 2800.00';
			} 
			else if (boardPlace.value === 'Galle' && destination.value === 'Ampara') 
			{
				Amount.value = 'RS 3900.00';
			} 
			else if (boardPlace.value === 'Galle' && destination.value === 'Mullaitive')
			{
				Amount.value = 'RS 4800.00';
			} 
			else if (boardPlace.value === 'Mathara' && destination.value === 'Batticaloa') 
			{
				Amount.value = 'RS 3900.00';
			} 
			else if (boardPlace.value === 'Mathara' && destination.value === 'Kanndy') 
			{
				Amount.value = 'RS 3200.00';
			} 
			else if (boardPlace.value === 'Mathara' && destination.value === 'Trincimolee') 
			{
				Amount.value = 'RS 4800.00';
			} 
			else if (boardPlace.value === 'Mathara' && destination.value === 'Polonnaruva') 
			{
				
				Amount.value = 'RS 4000.00';
			}
			

			
		}