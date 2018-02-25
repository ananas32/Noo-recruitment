@extends('layouts.app')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)

@section('body')

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
                @if(count($hotVacancy))
                    <div class="info">
                        <br>
                            <h3>{{ __('ГОРЯЩИЕ ВАКАНСИИ') }}</h3>
                        <div class="row">
                            @foreach($hotVacancy as $vacancy)
                                <div class="col-md-3 mb-6">
                                    <div>
                                        <a href="/work/{{ $vacancy->slug }}">
                                            <img class="img-responsive img-thumbnail"
                                                 src="{{ $vacancy->getCroppedPhoto('home', 'norm') }}" alt="">
                                        </a>
                                    </div>
                                    <h4 class="text-center"><a href="/work/{{ $vacancy->slug }}">{{ $vacancy->name_vacancy }}</a></h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

                <div class="info">
                    <br>
                    <h3>{{ __('РАБОТА ПО СТРАНАМ') }}</h3>
                    <div class="row">
                        @if(count($countries))
                            @foreach($countries as $country)
                                <div class="col-md-3">
                                    <div>
                                        <a href="{{ url('/work') }}/?country={{ $country->id }}">
                                            <img class="img-responsive img-thumbnail" src="{{ $country->getCroppedPhoto('avatar', 'norm') }}" alt="{{ $country->name }}">
                                        </a>
                                    </div>
                                    <h4 class="text-center"><a href="/work/?country={{ $country->id }}">{{ $country->name }}</a></h4>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="info">
                    <br>
                    <h3>Каталог вакансий</h3>
                    <div class="list">
                        <div class="item">
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
                        <div class="item">
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
                        </div><div class="item">
                            <h4 class="vacancy-category-title">
                                <a href="http://work-garant.com/category/vse-vakansii/cto/">CTO</a>
                            </h4>
                            <div class="vacancy-category">
                                <ul>
                                    <li><a href="http://work-garant.com/avtoslesar/">Автослесарь</a></li>
                                </ul>
                            </div>
                        </div><div class="item">
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
                        </div><div class="item">
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
                        </div><div class="item">
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
                        </div><div class="item">
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
                        </div><div class="item">
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
                        <div class="item">
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
                        <div class="item">
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
