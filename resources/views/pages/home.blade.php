@extends('layouts.app')

@section('body')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="content-block">
                <div class="info text-center">AntHill Hungary</div>
                <div>
                    <strong>Фирма AntHill Hungary более известна в Словакии и в Венгрии. Занимается трудоустройством 12 лет.
                    В Украине это первый большой наш проект, но продвигаемся очень хорошо.</strong>
                    <p>Что мы предлагаем:</p>
                    <ol>
                        <li>Абсолютно бесплатное оформление документов. Это обозначает, что из зарплаты людей тоже ничего не стягивается.</li>
                        <li>Современная система поиска рабочих мест, индивидуально для каждого человека, с учетом его возможностей и желаний.</li>
                        <li>Наличие большого количества рабочих мест в сферах производства, компютерной технологии, строительства и так дальше.</li>
                        <li>Обеспечиваем  защиту интересов за все время рабочего стажа для каждого рабочего.(Как раньше профсоюз)</li>
                        <li>Занимаемся исключительно официальными рабочими местами, все делаем легально.</li>
                        <li>Не предоставляем "более дешевую" рабочую силу, все получают одинаковую зарплату,и украинские и венгерские рабочие.</li>
                        <li>Чтоб устроиться на работу,достаточно иметь действующий  загранпаспорт и желание работать.</li>
                    </ol>
                </div>
                <div class="info">
                    <br>
                        <h3>ГОРЯЩИЕ ВАКАНСИИ</h3>
                    <div class="row">
                        <div class="col-md-3 mb-6">
                            <div>
                                <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-250x150.jpg" alt="">
                            </div>
                            <h4 class="text-center"><a href="">Название вакансии</a></h4>
                        </div>
                        <div class="col-md-3 mb-6">
                            <div>
                                <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-250x150.jpg" alt="">
                            </div>
                            <h4 class="text-center"><a href="">Название вакансии</a></h4>
                        </div>
                        <div class="col-md-3 mb-6">
                            <div>
                                <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-250x150.jpg" alt="">
                            </div>
                            <h4 class="text-center"><a href="">Название вакансии</a></h4>
                        </div>
                        <div class="col-md-3 mb-6">
                            <div>
                                <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2018/02/rabotnik-na-komplektatsiyu-avtomobilnyh-rulej-250x150.jpg" alt="">
                            </div>
                            <h4 class="text-center"><a href="">Название вакансии</a></h4>
                        </div>
                    </div>
                </div>

                <div class="info">
                    <br>
                    <h3>РАБОТА ПО СТРАНАМ</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <a href="http://work-garant.com/rabota/polsha/">
                                    <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2015/05/poland-450x300.jpg" alt="poland">
                                </a>
                            </div>
                            <h4 class="text-center"><a href="http://work-garant.com/rabota/polsha/">Работа в Польше</a></h4>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <a href="http://work-garant.com/rabota/polsha/">
                                    <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2015/10/Litva-450x300.jpg" alt="poland">
                                </a>
                            </div>
                            <h4 class="text-center"><a href="http://work-garant.com/rabota/polsha/">РАБОТА В ЛИТВЕ</a></h4>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <a href="http://work-garant.com/rabota/polsha/">
                                    <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2017/07/latvia-450x300.jpg" alt="poland">
                                </a>
                            </div>
                            <h4 class="text-center"><a href="http://work-garant.com/rabota/polsha/">РАБОТА В ЛАТВИИ</a></h4>
                        </div>
                        <div class="col-md-3">
                            <div>
                                <a href="http://work-garant.com/rabota/polsha/">
                                    <img class="img-responsive img-thumbnail" src="http://work-garant.com/wp-content/uploads/2015/10/Czechia-450x300.png" alt="poland">
                                </a>
                            </div>
                            <h4 class="text-center"><a href="http://work-garant.com/rabota/polsha/">РАБОТА В ЧЕХИИ</a></h4>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <br>
                    <h3>Каталог вакансий</h3>
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div><div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                    <li><a href="http://work-garant.com/rabota-na-rihtovochnom-stende-vyravnivanie-geometrii-kuzova/">Работа на рихтовочном стенде (выравнивание геометрии кузова)</a></li>
                                    <li><a href="http://work-garant.com/shinomontazhnik/">Шиномонтажник</a></li>
                                    <li><a href="http://work-garant.com/mojshhiki-na-avtomojku/">Мойщики на автомойку</a></li>
                                    <li><a href="http://work-garant.com/avtomalyar/">Автомаляр</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
блок в якому будуть країни

Далі блок з гарячим вакансіями до 8 штук

Список спеціалізацій і вакансій

@stop
