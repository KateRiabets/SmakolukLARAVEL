

function changeText(number) {
    var sectionText = document.querySelector(".section-text2");
    var sectionWord = document.querySelector(".section-word");
    var sectionImage = document.getElementById("jam");
    var sectionImage2 = document.getElementById("jam-mobile");
    sectionText.classList.remove('fade-in');
    sectionWord.classList.remove('fade-in');
    sectionImage.classList.remove('fade-in');
    sectionImage2.classList.remove('fade-in');

    sectionText.classList.add('fade-out');
    sectionWord.classList.add('fade-out');
    sectionImage.classList.add('fade-out');
    sectionImage2.classList.add('fade-out');
    setTimeout(function() {
        if (number === "1") {
            sectionImage.src="banki/lemon.png"
            sectionImage2.src="banki/lemon.png"
            sectionWord.textContent="Лимон"
            sectionText.textContent = "Екзотична новинка з дуже незвичайним кисло-солодким смаком. Цей джем має освіжаючий і трохи кислуватий смак лимону, що зробить будь-який сніданок більш насиченим і апетитним. Його аромат чудово підійде для тих, хто любить легкі фруктові запахи.";
            document.querySelector('.button3').href = 'lemon';
        } else if (number === "2") {
            sectionImage.src="banki/apr.png"
            sectionImage2.src="banki/apr.png"
            sectionWord.textContent="Абрикос"
            sectionText.textContent = "Хто ж не любить абрикосовий джем? Він не лише має неймовірний смак, але й зміцнює імунітет, підтримує функцію кровотворення,  покращує зір та стан шкіри. Не кажучи вже про те, що таке частування прекрасно смакує з млинцями, печивом та іншими кондитерськими виробами. Абрикосовий джем вдало прикрасить ваші улюблені страви і подарує справжнє задоволення та чудовий настрій вам та вашій родині.";
            document.querySelector('.button3').href = 'apricot';
        }
        else if (number === "3") {
            sectionImage.src="banki/plum.png"
            sectionImage2.src="banki/plum.png"
            sectionWord.textContent="Слива"
            sectionText.textContent = "Звичайні садові сливи вважаються не тільки смачними, а й лікувальними. Навіть при обробці вони зберігають вітаміни і мінерали, тому варення з цих фруктів не менш корисно, ніж самі плоди. Цей джем має насичений смак та аромат свіжих слив, що дозволяє насолоджуватися їхнім вишуканим смаком.";
            document.querySelector('.button3').href = 'plum';
        }
        else if (number === "4") {
            sectionImage.src="banki/apple.png"
            sectionImage2.src="banki/apple.png"
            sectionWord.textContent="Яблуко"
            sectionText.textContent = "Яблучне варення стало традиційною солодкою заготівлею на зиму, яку люблять і дорослі, і діти. Його їдять з хлібом, використовують як начинку для різноманітної випічки, додають до каш, сиру і різних десертів. Цей джем містить велику кількість різних вітамінів та макроелементів, що роблять його дуже корисним ласощами.";
            document.querySelector('.button3').href = 'apple';
        }
        else if (number === "5") {
            sectionImage.src="banki/tykva.png"
            sectionImage2.src="banki/tykva.png"
            sectionWord.textContent="Гарбуз"
            sectionText.textContent = "Гарбуз користується заслуженою популярністю на всіх континентах. Як його тільки не готують: і відварюють, і запікають, і гасять, і їдять сирим, готують снеки, приправляють спеціями, травами, маслом і медом. Вона корисна в будь-якому вигляді для дорослих і дітей, а в нашому джемі – тим паче!";
            document.querySelector('.button3').href = 'pumpkin';
        }
        else if (number === "6") {
            sectionImage.src="banki/chernika.png"
            sectionImage2.src="banki/chernika.png"
            sectionWord.textContent="Чорниця"
            sectionText.textContent = "Чорниці - це справжні скарби лісів! Цей джем має насичений смак чорниць, який може дати вам відчуття свіжості та енергії. Він створений зі свіжих чорниць, які дають йому приємний фруктовий аромат. До того ж, варення з чорниці – дієтичний продукт. Його можуть вживати люди як з надлишковою вагою, так і ті, які страждають цукровим діабетом.";
            document.querySelector('.button3').href = 'blueberry';
        }
        else if (number === "7") {
            sectionImage.src="banki/malina.png"
            sectionImage2.src="banki/malina.png"
            sectionWord.textContent="Малина"
            sectionText.textContent = "Малиновий джем має насичений фруктовий аромат та соковитий смак. Він створений зі свіжих малин, які вирощуються в здоровому середовищі і збираються на піку їхньої зрілості. Цей джем чудово підійде для тих, хто любить насолоджуватися яскравими фруктовими смаками. Він виготовляється без додавання консервантів, штучних ароматизаторів та барвників, тому ви можете насолоджуватися його смаком з повною впевненістю в якості та натуральності.";
            document.querySelector('.button3').href = 'raspebby';
        }
        else if (number === "8") {
            sectionImage.src="banki/mandarin.png"
            sectionImage2.src="banki/mandarin.png"
            sectionWord.textContent="Мандарин"
            sectionText.textContent = "Смак зими та нового року! Мандариновий джем - це поєднання свіжості та солодкості, яке дозволяє насолоджуватися ароматом свіжої цитрусової фруктової нотки. Він має насичений фруктовий смак та аромат, тому ідеально підійде як додаток до чаю або як смачну добавка до сніданку. ";
            document.querySelector('.button3').href = 'mandarin';
        }
        else if (number === "9") {
            sectionImage.src="banki/grusha.png"
            sectionImage2.src="banki/grusha.png"
            sectionWord.textContent="Груша"
            sectionText.textContent = "Якщо ви шукаєте джем з легким, але насиченим смаком, то грушевий джем - ваш вибір! Він створений зі свіжих груш, які дають йому приємний фруктовий аромат, має ніжний і соковитий смак, який може доповнити будь-який сніданок чи десерт. ";
            document.querySelector('.button3').href = 'pear';
        }
        else if (number === "10") {
            sectionImage.src="banki/aiva.png"
            sectionImage2.src="banki/aiva.png"
            sectionWord.textContent="Айва"
            sectionText.textContent = "Цей джем виготовлений зі свіжих айв, які мають пряний, витончений смак. Він має чарівний аромат, який сповільнює час і забезпечує вам моменти відпочинку. Цей джем - ідеальний вибір для тих, хто хоче зануритися в світ приголомшливого смаку.";
            document.querySelector('.button3').href = 'aiva';
        }
        else if (number === "11") {
            sectionImage.src="banki/peach.png"
            sectionImage2.src="banki/peach.png"
            sectionWord.textContent="Персик"
            sectionText.textContent = "Персикове варення – одне з найвишуканіших. Таким корисним ласощам раді дорослі та діти. Воно має приємний солодкий смак з легкою кислинкою, що робить його ідеальним вибором для сніданку або десерту. Якщо ви любите насолоджуватися свіжим та соковитим смаком, то персиковий джем - ідеальний вибір для вас.";
            document.querySelector('.button3').href = 'peach';
        }
        sectionText.classList.remove('fade-out');
        sectionWord.classList.remove('fade-out');
        sectionImage.classList.remove('fade-out');
        sectionImage2.classList.remove('fade-out');

        sectionText.classList.add('fade-in');
        sectionWord.classList.add('fade-in');
        sectionImage.classList.add('fade-in');
        sectionImage2.classList.add('fade-in');
    }, 300);

    var items = document.querySelectorAll('.item');

// Добавить обработчик клика для каждой картинки
    items.forEach(function(item) {
        item.addEventListener('click', function() {
            // Убрать класс 'active' у всех картинок
            items.forEach(function(item) {
                item.classList.remove('active');
            });

            // Добавить класс 'active' к выбранной картинке
            item.classList.add('active');
        });
    });

}
document.addEventListener('DOMContentLoaded', function() {
    changeText("1");
    var firstItem = document.querySelector('.item');
    if (firstItem) {
        firstItem.classList.add('active');
    }
});
