(function(){
	/* Identifier la collection de button cours */
		let butcours = document.querySelectorAll("p")
		let ctrlCours = document.querySelectorAll('.ctrl-cours')
		let noCtrlCours = 0;
		for (const elmCours of butcours)
		{
			let butcours = ctrlCours[noCtrlCours++].querySelectorAll("p")
			//noCtrlCarrousel = noCtrlCarrousel +1;
			console.log(bout.length)

			let k =0;
			butcours[0].checked = true;
			for (const bt of butcours)
			{
				bt.value = k++;
				console.log(bt.value)
				bt.addEventListener('mousedown', function() {
					elmCours.style.backgroundColor = "red"
					console.log(elmCours.style.backgroundColor)
				})

			}
		}	
}())	