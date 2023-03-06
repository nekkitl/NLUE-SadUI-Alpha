/*
 * selectText.js
 * Частично исправляет баг с выделениме тексты в ссылках
 */
(function(){
	for(var i in document.getElementsByTagName("a")){
		document.getElementsByTagName("a")[i].onmousedown = function(e){
			this.setAttribute('data-selecting-start','1');
			return false;
		};
		
		document.getElementsByTagName("a")[i].onmouseup = function(e){
			this.setAttribute('data-selecting-start','0');
		};
		
		document.getElementsByTagName("a")[i].onmouseout = function(e){
			this.setAttribute('data-selecting-start','0');
		};
		
		document.getElementsByTagName("a")[i].onmousemove = function(e){
			if(this.getAttribute('data-selecting-start')=='1'){
				 var rng, sel;
				if ( document.createRange ) {
					rng = document.createRange();
					rng.selectNode( this )
					sel = window.getSelection();
					sel.removeAllRanges();
					sel.addRange( rng );
				} else {
					var rng = document.body.createTextRange();
					rng.moveToElementText( this );
					rng.select();
				}
			}
		};
	}
})();