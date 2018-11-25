		
			function getTime(){

				var timer = new Date();
				var sec = timer.getSeconds();
				var hour = timer.getHours();
				var minutes = timer.getMinutes();
				
				var MonthArray = new Array("Jan", "Feb", "Mar", "April", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
				
				
				
				var frsTime = document.getElementById("FRSTIME");
				var frsDate = document.getElementById("FRSDATE");
				var mon = timer.getMonth();
				
				
				if(sec<10){
				
					sec = '0' + sec;
				
				}
				
				
				if(minutes<10){
				
					minutes = '0' + minutes;
				
				}
				
				
				
				
				if (hour>0 && hour<13){
					if (hour==12){
					
						frsTime.innerHTML = hour+' : '+minutes+' : '+sec + ' PM';
						
						
					}else{
						frsTime.innerHTML = hour+' : '+minutes+' : '+sec + ' AM';
						
					}
					
				
				}else if(hour>12 && hour<24){
					var i = parseInt(hour);
					i = i-12;
					
					if(i<10){
				
					i = '0' + i;
				
				}
				
					
					frsTime.innerHTML = i +' : '+minutes+' : '+sec + ' PM';
					
				
				} else{
				
					frsTime.innerHTML = '12 : '+minutes+' : '+sec + ' AM';
				
				
				}
				
				
				
				
				frsDate.innerHTML = timer.getDate() + '&nbsp' + MonthArray[parseInt(mon)] + '&nbsp' + timer.getFullYear()
				
				setTimeout("getTime()",100);
				


			}
			
			window.onload = getTime;
