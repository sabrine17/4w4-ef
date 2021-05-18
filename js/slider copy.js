(function(){
	/* Idntifier la collection de button cours */
		let butcours = document.querySelectorAll('.buttoncours')
		let ctrlCours = document.querySelectorAll('.ctrl-cours')
		let noCtrlCours = 0;
		for (const elmCarrousel of butcours)
		{
			let bout = ctrlCours[noCtrlCours++].querySelectorAll('.p')
			//noCtrlCarrousel = noCtrlCarrousel +1;
			console.log(bout.length)

			let k =0;
			bout[0].checked = true;
			for (const bt of bout)
			{
				bt.value = k++;
				console.log(bt.value)
				bt.addEventListener('mousedown', function() {
					elmCarrousel.style.transform = "translateX(" + (-this.value*100) + "vw)"
					console.log(elmCarrousel.style.transform)
				})

			}
		}	
}())	