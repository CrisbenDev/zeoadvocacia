( function (scrollPage)
{
	function menu()
	{
		this.init = function (element,time)
		{
			var links = document.querySelectorAll(element);
			var  atual = window.scrollY;
			[].forEach.call(links,function(link)
			{
				link.addEventListener('click',function(e)
				{					
					e.preventDefault();
					var target = document.querySelector(link.hash);
					var tempo = time / 20;
					var valorPassos = (  ( target.offsetTop - window.scrollY )  )   / tempo ;
					function passo()
					{
						if(tempo <= 0)
						{							
							window.scrollBy(0, window.scrollY - target.offsetTop) ;
							return ;	
						}
						window.scrollBy(0,valorPassos);
						setTimeout(passo,20);		
						tempo--;
					}
					passo();
				});
			})
		//	});
		}
	};
	scrollPage.menu = new menu();

})(window);

window.addEventListener('load',function(){
	
	menu.init('#menuUl a',600);
	
});

