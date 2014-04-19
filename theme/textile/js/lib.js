$(document).ready(function() {
    $("#cloud-carousel").CloudCarousel({			
        altBox: $("#cloud-alt"),
        autoRotate: 'yes',
        autoRotateDelay: 8000,
        buttonLeft: $("#buttonLeft"),
        buttonRight: $("#buttonRight"),
        mouseWheel: true,
        reflHeight: 50,
        reflOpacity: 0.5,
        speed: 0.1,
        titleBox: $("#cloud-title"),
        xPos: 425,
        yPos: 120,
        yRadius: 100
    });
    
    $("#feedback").attr("title", 'Напишите нам');
});

/**
 * Делимся ссылкой
 * @param net имя социальной сети
 * @param text текст сообщения
 * @param title заголовок сообщения
 * @param url адрес ссылки
 */
function share(net, text, title, url) {
	var webtitle = encodeURIComponent(title);
	var share_text = encodeURIComponent(text);
	var picture = encodeURIComponent('http://9buttons.kz/data/uploads/logo.png');
	var itemURL = encodeURIComponent(url);
	var netUrl = '';
	
	if ('facebook' == net) {
		netUrl  = 'http://www.facebook.com/sharer.php?s=100';
		netUrl += '&p[title]=' + webtitle;
		netUrl += '&p[summary]=' + share_text;
		netUrl += '&p[url]=' + itemURL;
		netUrl += '&p[images][0]=' + picture;
	} else if ('twitter' == net) {
		netUrl  = 'http://twitter.com/share?';
		netUrl += 'text=' + share_text + ' ' + webtitle + ' @reportErrOrg';
		netUrl += '&url=' + itemURL;
		netUrl += '&counturl=' + itemURL;
	} else if ('odnoklassniki' == net) {
		netUrl  = 'http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1';
		netUrl += '&st.comments=' + share_text + ' ' + webtitle;
		netUrl += '&st._surl=' + itemURL;
	} else if ('vkontakte' == net) {
		netUrl  = 'http://vkontakte.ru/share.php?';
		netUrl += 'url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&description=' + share_text;
		netUrl += '&image=' + picture;
		netUrl += '&noparse=true';
	} else if ('mailru' == net) {
		netUrl  = 'http://connect.mail.ru/share?';
		netUrl += 'url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&description=' + share_text;
		netUrl += '&imageurl=' + picture;
	} else if ('linkedin' == net) {
		netUrl  = 'http://www.linkedin.com/shareArticle?mini=true';
		netUrl += '&url=' + itemURL;
		netUrl += '&title=' + webtitle;
		netUrl += '&summary=' + share_text;
		netUrl += '&source=9buttons';
	} else if ('googleplus' == net) {
		netUrl  = 'https://m.google.com/app/plus/x/?v=compose';
		netUrl += '&content=' + itemURL;
	}
    window.open(netUrl, '', 'toolbar=0,status=0,width=626,height=436');
	return false;
}
