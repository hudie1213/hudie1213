window.onload = function() {
		var oList = document.getElementById('list');
		var oLi = oList.getElementsByTagName('li');
		var oA = oList.getElementsByTagName('p');
		var oMuban = document.getElementById('muban');
		var oDiv = oMuban.getElementsByTagName('div');
		oDiv[0].style.zIndex = 999;
		oA[0].style.color = '#fff';
		oLi[0].style.background = '#777';
		for(n = 1; n < 6; n++) {
			oDiv[n].style.zIndex = 1;
			oA[n].style.color = '#212121';
			oLi[n].style.background = '#dbdbdb';
		}


			oLi[0].onclick = function() {
				oDiv[0].style.zIndex = 999;
				oA[0].style.color = '#fff';
				oLi[0].style.background = '#777';
				for(n = 1; n < 6; n++) {
					oDiv[n].style.zIndex = 1;
					oA[n].style.color = '#212121';
					oLi[n].style.background = '#dbdbdb';
				}
			}
			oLi[1].onclick = function() {
				oDiv[0].style.zIndex = 0;
				oDiv[1].style.zIndex = 999;
				oDiv[2].style.zIndex = 2;
				oDiv[3].style.zIndex = 3;
				oDiv[4].style.zIndex = 4;
				oDiv[5].style.zIndex = 5;
				oA[1].style.color = '#fff';
				oLi[1].style.background = '#777';
				oA[0].style.color = '#212121';
				oLi[0].style.background = '#dbdbdb';
				oA[2].style.color = '#212121';
				oLi[2].style.background = '#dbdbdb';
				oA[3].style.color = '#212121';
				oLi[3].style.background = '#dbdbdb';
				oA[4].style.color = '#212121';
				oLi[4].style.background = '#dbdbdb';
				oA[5].style.color = '#212121';
				oLi[5].style.background = '#dbdbdb';
			}
			oLi[2].onclick = function() {
				oDiv[0].style.zIndex = 1;
				oDiv[1].style.zIndex = 1;
				oDiv[2].style.zIndex = 999;
				oDiv[3].style.zIndex = 3;
				oDiv[4].style.zIndex = 4;
				oDiv[5].style.zIndex = 5;
				oA[2].style.color = '#fff';
				oLi[2].style.background = '#777';
				oA[1].style.color = '#212121';
				oLi[1].style.background = '#dbdbdb';
				oA[0].style.color = '#212121';
				oLi[0].style.background = '#dbdbdb';
				oA[3].style.color = '#212121';
				oLi[3].style.background = '#dbdbdb';
				oA[4].style.color = '#212121';
				oLi[4].style.background = '#dbdbdb';
				oA[5].style.color = '#212121';
				oLi[5].style.background = '#dbdbdb';
			}
			oLi[3].onclick = function() {
				oDiv[0].style.zIndex = 2;
				oDiv[1].style.zIndex = 1;
				oDiv[2].style.zIndex = 2;
				oDiv[3].style.zIndex = 999;
				oDiv[4].style.zIndex = 4;
				oDiv[5].style.zIndex = 5;
				oA[3].style.color = '#fff';
				oLi[3].style.background = '#777';
				oA[1].style.color = '#212121';
				oLi[1].style.background = '#dbdbdb';
				oA[0].style.color = '#212121';
				oLi[0].style.background = '#dbdbdb';
				oA[2].style.color = '#212121';
				oLi[2].style.background = '#dbdbdb';
				oA[4].style.color = '#212121';
				oLi[4].style.background = '#dbdbdb';
				oA[5].style.color = '#212121';
				oLi[5].style.background = '#dbdbdb';
			}

			oLi[4].onclick = function() {
				oDiv[0].style.zIndex = 2;
				oDiv[1].style.zIndex = 1;
				oDiv[2].style.zIndex = 2;
				oDiv[3].style.zIndex = 3;
				oDiv[4].style.zIndex = 999;
				oDiv[5].style.zIndex = 5;
				oA[4].style.color = '#fff';
				oLi[4].style.background = '#777';
				oA[1].style.color = '#212121';
				oLi[1].style.background = '#dbdbdb';
				oA[0].style.color = '#212121';
				oLi[0].style.background = '#dbdbdb';
				oA[2].style.color = '#212121';
				oLi[2].style.background = '#dbdbdb';
				oA[3].style.color = '#212121';
				oLi[3].style.background = '#dbdbdb';
				oA[5].style.color = '#212121';
				oLi[5].style.background = '#dbdbdb';
			}
			oLi[5].onclick = function() {
				oDiv[0].style.zIndex = 6;
				oDiv[1].style.zIndex = 1;
				oDiv[2].style.zIndex = 2;
				oDiv[3].style.zIndex = 3;
				oDiv[4].style.zIndex = 4;
				oDiv[5].style.zIndex = 999;
				oA[5].style.color = '#fff';
				oLi[5].style.background = '#777';
				oA[1].style.color = '#212121';
				oLi[1].style.background = '#dbdbdb';
				oA[0].style.color = '#212121';
				oLi[0].style.background = '#dbdbdb';
				oA[2].style.color = '#212121';
				oLi[2].style.background = '#dbdbdb';
				oA[4].style.color = '#212121';
				oLi[4].style.background = '#dbdbdb';
				oA[3].style.color = '#212121';
				oLi[3].style.background = '#dbdbdb';
			}
		}